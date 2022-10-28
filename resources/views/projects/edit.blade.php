@extends('layouts.main')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-15 m-5 mx-0">
        <h1 class="text-4xl">
            Update Post
        </h1>
    </div>
</div>

@if ($errors->any())
    <div class="w-4/5 m-auto">
        <ul>
            @foreach ($errors->all() as $error )
                <li class="w-1/5 mb-4 text-gray-50 bg-red-700 rounded-2xl
                py-4 px-3">
                {{ $error }}
            </li>
            @endforeach
        </ul>
    </div>

@endif

<div class="w-4/5 m-auto py-16">
    <form action="/projects/{{$post->slug}}"
        method="POST"
        enctype="multipart/form-data">
        @csrf
        {{--* to update post, use PUT method --}}
        @method('PUT')

        <input
        maxlength="50"
        type="text"
        name="title"
        value="{{$post->title}}"
        class="bg-transparent block border-b-2 w-full h-20 text-3xl outline-none">

        <textarea
            name="description"
            maxlength="150"
            class="py-20 bg-transparent block border-b-2 w-full
            h-20 text-xl outline-none"
            >{{$post->description}}
        </textarea>


        <div class="bg-gray-lighter pt-15">
            <label class="w-44 flex flex-col items-center px-2 py-2 hover:bg-blue-500 rounded-full
                bg-white-rounded-lg shadow-lg tracking-wide capitalize border-blue-200 border-2 cursor-pointer">
                <span class="mt-2 text-base leading-normal">
                    Choose picture
                </span>
                {{-- * img preview functionality --}}
                <input
                    type="file"
                    name="image"
                    class="hidden"
                    accept="image/*"
                    onchange="loadFile(event)"
                    >
                </label>
            </div>
            <div class="mt-3">
                <img id="output" src="{{asset('gallery/'.$post->image_path)}}" class="w-1/6"/>
            </div>
        <button
            type="submit"
            class="uppercase mt-15 my-10 bg-gray-500 hover:bg-green-700 text-gray-100 text-lg
            font-extrabold py-4 px-8 rounded-3xl">
            Publish Picture
        </button>
    </form>
</div>

@endsection
@include('layouts.scripts.page-scripts')
