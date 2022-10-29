{{-- ! complete this page later --}}
@extends('layouts.main')

@section('content')

<div class="w-full h-[100%] text-center flex flex-col">
    <h1 class="text-2xl font-semibold mt-5">
     Welcome to the {{$post->title}} page
    </h1>

    {{-- ? In future renditions, don't display the delete/edit buttons in the show page, since its one of the few pages guest can access --}}
    {{-- ? yes even though I am checking for user authentication below, I think it's best to display these delete and edit buttons only on the dashboard page --}}
    {{-- *checking if the authenticated user is logged in and is also the creator of that blog post --}}
    <div class="float-right flex flex-row justify-center items-center my-2">
    @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
           <span class="">
               <a href="/projects/{{ $post->slug }}/edit"
                   class="uppercase border-2
                   border-gray-100 text-gray-100 text-xs font-extrabold
                   py-3 px-5 rounded-3xl bg-yellow-500 hover:bg-yellow-800">
                   Edit
               </a>
           </span>

           <span class="">
               <form
                   action="/projects/{{ $post->slug }}"
                   method="POST"
                   onsubmit="return confirm('Are you sure?')">
                   @csrf
                   @method('delete')

                   <button
                       class="uppercase border-2
                       border-gray-100 text-gray-100 text-xs font-extrabold
                       py-3 px-5 rounded-3xl bg-red-600 hover:bg-red-800"
                       type="submit">
                       Delete
                   </button>
                </form>
            </span>
            @endif
        </div>
        {{-- <div class="grid md:grid-cols-2 gap-2 m-4 p-5 sm:p-16 w-[60%]"> --}}
            <div class="flex flex-col justify-center items-center my-8 lg:flex-row lg:justify-evenly">
            {{-- <img src="{{asset $post->image_path}}" alt="" class="w-2/5 h-2/5"> --}}
            <div class="flex flex-col lg:w-[60%]">
                <img class="object-cover shadow-lg transition duration-500 hover:scale-105 px-8 py-1 sm:w-[60vw] sm:max-h-[40%] lg:w-[50%] lg:h-[40%] lg:px-1 rounded-lg place-self-center" src="{{asset('gallery/'.$post->image_path)}}" alt="{{ $post->title}}">
                <p class=" text-xs text-black">
                    Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
                    </p>
            </div>
            <p class="mt-5 font-normal text-lg text-center lg:text-left lg:text-lg lg:w-[40%] text-black">{{ $post->description }}</p>
        </div>

</div>
            @endsection
