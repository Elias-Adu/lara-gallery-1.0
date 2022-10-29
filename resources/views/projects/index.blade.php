@extends('layouts.main')

@section('content')
    <div x-data x-data :class="$store.darkMode.toggle() ">
        <div x-data  :class="$store.darkMode.on && 'text-gray-100'" class="m-auto w-4/5 text-center">
            <div class="py-15 m-5 border-b border-gray-200">
                <h1 class="text-3xl md:text-5xl lg:font-semibold">
                    Projects Gallery
                </h1>
            </div>
        </div>

        {{-- !fix message disappear after 10 seconds && fix padding of message --}}
        @if (session()->has('message'))
            <div class="m-auto mt-10 w-4/5 pl-2">
                <p class="mb-4 w-2/6 rounded-2xl bg-green-500 p-4 text-gray-50">
                    {{ session()->pull('message') }}
                </p>
            </div>
        @endif

        {{-- Checking if a user is logged in --}}
        @if (Auth::check())
            <div class="pt-15 m-auto my-4 w-4/5">
                <a href="/projects/create"
                    class="rounded-3xl bg-blue-500 py-3 px-5 text-xs font-extrabold uppercase text-gray-100 hover:bg-green-600">
                    Create post
                </a>
            </div>
        @endif


        {{-- ** list of  Photo Cards --}}
        {{-- dynamic data fetch from database --}}
        <div class="m-4 grid gap-4 p-5 sm:p-16 md:grid-cols-2 lg:grid-cols-5">
            @foreach ($posts as $post)
                <a href="/projects/{{ $post->slug }}"
                    class="mb-3 flex transform flex-col items-center rounded-lg bg-transparent transition duration-500 hover:scale-105 hover:grayscale-0 focus:outline-none focus:ring-4 md:max-w-xl md:flex-row md:grayscale lg:flex-col">
                    <img class="h-96 w-full rounded-lg object-cover md:h-full md:w-3/5 lg:h-full lg:w-full"
                        src="{{ asset('gallery/' . $post->image_path) }}" alt="{{ $post->title }}">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 font-bold tracking-tight text-gray-100 text-sm lg:text-xl">{{ $post->title }}</h5>
                        <span class="mb-2 text-xs text-gray-200">
                            Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
                        </span>
                        <p class="mb-3 font-normal text-gray-50 text-xs lg:text-sm"><span
                                class="inline-block max-w-[15ch] overflow-hidden text-ellipsis whitespace-nowrap">{{ $post->description }}</span>
                        </p>
                    </div>
                </a>
            @endforeach
        </div>

    </div>
    {{-- * an okay working card sample --}}
    {{-- <div class="grid lg:grid-cols-3 gap-4 m-4 p-5">
        @foreach ($posts as $post)
        <a href="/projects/{{ $post->slug }}" class="flex flex-col items-center rounded-lg border shadow-md md:flex-row md:max-w-xl bg-gradient-to-br from-green-500 to-blue-700 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800">
            <img class="object-cover w-full h-96 lg:h-full rounded-t-lg md:h-full md:w-3/5 md:rounded-none md:rounded-l-lg" src="{{asset('storage/'.$post->image_path)}}" alt="">
            <div class="flex flex-col justify-between p-4 leading-normal">
                <h5 class="mb-2 text-xl font-bold tracking-tight text-white">{{ $post->title }}</h5>
                <span class=" text-xs mb-2 text-gray-200">
                    Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
                    </span>
                <p class="mb-3 font-normal text-white">{{ $post->description }}</p>
            </div>
        </a>
        @endforeach --}}
@endsection
