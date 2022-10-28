<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{
    // *restricting guest users' access through a middleware
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('projects.index')
            ->with('posts', Post::orderBy('updated_at', 'DESC')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048',
        ]);

        //* giving image received a new id
        //* but I first sanitized the file name to remove unsavable characters in string
        $sanitizedNameString = preg_replace(array('/\s/', '/\.[\.]+/', '/[^\w_\.\-]/'), array('_', '-', ''), $request->title);

        $newImageName = uniqid() . '-' . $sanitizedNameString . '.' .
            $request->image->extension();

        //* storing image in a directory
        $request->image->move(public_path('gallery'), $newImageName);

        //* sanitizing text to preserve whitespaces and paragraphs
        $descTextValue = $request->input('description');
        $descTextValue = preg_replace('/\n\n+/', "\n\n", $descTextValue);
        // dd($descTextValue, $newImageName);

        // inserting data into the database
        Post::create([
            'title' => $request->input('title'),
            // 'description' => $request->input('description'),
            'description' => $descTextValue,
            'slug' => SlugService::createSlug(
                Post::class,
                'slug',
                $request->title
            ),
            'image_path' => $newImageName,
            'user_id' => auth()->user()->id,
        ]);

        return redirect('/projects')
            ->with('message', 'Your picture has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        return view('projects.show')
            ->with('post', Post::where('slug', $slug)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        return view('projects.edit')
            ->with('post', Post::where('slug', $slug)->first());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            // 'image' => 'required|mimes:jpg,png,jpeg|max:5048',

        ]);

        // * sanitizing request title
        $sanitizedNameString = preg_replace(array('/\s/', '/\.[\.]+/', '/[^\w_\.\-]/'), array('_', '-', ''), $request->title);

        // *sanitizing description text to preserve whitespaces and paragraphs
        $sanitizedTextValue = preg_replace('/\n\n+/', "\n\n", $request->input('description'));

        // * checking if image path name and path already exists;
        // if it exists, ignore image requirement and update the rest of the data
        $receivedImageName = $request->image;
        $prevImageName =  Post::where('slug', $slug)->first('image_path');

        if (empty($receivedImageName) && $prevImageName) {
            // dd("validated without image");
            Post::where('slug', $slug)
                ->update([
                    'title' => $request->input('title'),
                    'description' => $sanitizedTextValue,
                    'slug' => SlugService::createSlug(
                        Post::class,
                        'slug',
                        $request->title
                    ),
                    //* avoiding image path update
                    // 'image_path' => $updatedImageName,
                    'user_id' => auth()->user()->id,
                ]);
        }

        // * checking whether a new image is requested or declared
        // if it does, require an image, sanitize image name and update data
        if (isset($receivedImageName) && $prevImageName) {
            $request->validate([
                'image' => 'required|mimes:jpg,png,jpeg|max:5048',
            ]);

            // * sanitizing image name
            $updatedImageName = uniqid() . '-' . $sanitizedNameString . '.' .
                $request->image->extension();

            //* storing new image in a directory
            $request->image->move(public_path('gallery'), $updatedImageName);

            // * deleting the old image in filesystem
            $fileUrl = public_path('gallery') . '/' . $prevImageName->image_path;
            if (file_exists($fileUrl)) {
                // dd('File found: ');
                unlink($fileUrl);
            } else {
                exit('Sorry, unable to Update post!');
                // abort('403');
            }
        }

        Post::where('slug', $slug)
            ->update([
                'title' => $request->input('title'),
                'description' => $sanitizedTextValue,
                'slug' => SlugService::createSlug(
                    Post::class,
                    'slug',
                    $request->title
                ),
                'image_path' => $updatedImageName,
                'user_id' => auth()->user()->id,
            ]);


        return redirect('/projects')
            ->with('message', 'Post Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $post = Post::where('slug', $slug);

        //* deleting picture when post gets deleted
        $url = public_path('gallery') . '/' . $post->first()->image_path;
        if (file_exists($url)) {
            // dd('File found: ', $url);
            unlink($url);
        }
        $post->delete();

        return redirect('/projects')
            ->with('message', 'Post Deleted!');
    }
}