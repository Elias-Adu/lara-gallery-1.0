
@extends('layouts.main')

@section('content')
    {{-- @include('layouts.carousel') --}}
    @include('layouts.hero')


{{-- *** develop an image slider card for this section --}}
{{--featured image posts  --}}
{{-- <div class="sm:grid grid-cols-2 w-4/5 m-auto py-10">
    <div class=" flex pt-5 text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium lg:rounded-l-lg text-base px-5 text-center">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
            <span class=" uppercase text-xs">
                Photography
            </span>
            <h3 class="text-xl font-bold py-10">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim sit dolorum ex minus, amet aspernatur quos voluptatum suscipit temporibus laudantium.
            </h3>
            <a href="/projects"
                class="uppercase border-2
                border-gray-100 text-gray-100 text-xs font-extrabold
                py-3 px-5 rounded-3xl bg-fuchsia-700 hover:bg-gray-600">
                View More
            </a>
        </div>
    </div>
    <div class="">
        <img class="lg:rounded-r-lg" src="{{ asset('storage/fashion-toronto-watch.jpg') }}" alt="laptop picture" width="700px">
    </div>
</div> --}}

{{-- *first post --}}

<div class="py-16 md:w-[90vw] md:my-7 md:mx-auto border border-gray-100 rounded-xl bg-gray-50 shadow-lg">
    <div class="container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
        <div class="space-y-6 md:space-y-0 md:flex md:gap-6 lg:items-center lg:gap-12">
          <div class="md:5/12 lg:w-5/12">
            <img src="{{ asset('storage/fashion-toronto-watch.jpg') }}" class="rounded-md" alt="image" loading="lazy" width="" height="">
          </div>
          <div class="md:7/12 lg:w-6/12">
            <h2 class="text-2xl font-bold md:text-4xl text-cyan-600">Capturing Moments and Images with Passion</h2>
            <p class="mt-6 text-gray-600">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum omnis voluptatem accusantium nemo perspiciatis delectus atque autem! Voluptatum tenetur beatae unde aperiam, repellat expedita consequatur! Officiis id consequatur atque doloremque!</p>
            <p class="mt-4 text-gray-600"> Nobis minus voluptatibus pariatur dignissimos libero quaerat iure expedita at? Asperiores nemo possimus nesciunt dicta veniam aspernatur quam mollitia.</p>
          </div>
        </div>
    </div>
  </div>



    {{--* call to action  --}}

    <section class="bg-sky-900 text-gray-100 rounded-md">
        <div class="container flex flex-col mx-auto lg:flex-row">
            <div class="w-full lg:w-1/3" style="background-image: url('{{asset('storage/in-home-camera-set-up.jpg')}}'); background-position: center center; background-size: cover;"></div>
            <div class="flex flex-col w-full p-6 lg:w-2/3 md:p-8 lg:p-12">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-8 h-8 mb-8 text-sky-400">
                    <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                </svg>
                <h2 class="text-3xl font-semibold leading-none">Check Out my Recent Projects</h2>
                <p class="mt-4 mb-8 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non voluptatum rem amet!</p>
                <button class="self-start px-10 py-3 text-lg font-medium rounded-3xl text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800">See Projects</button>
            </div>
        </div>
    </section>

    {{-- *Client Reviews --}}

<div class="py-16 white">
    <div class="container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
        <h2 class="mb-12 text-center text-2xl text-gray-900 font-bold md:text-4xl">What's some customers say</h2>
        <div class="grid gap-8 md:grid-rows-2 lg:grid-cols-2">
          <div class="row-span-2 p-6 border border-gray-100 rounded-xl bg-gray-50 text-center sm:p-8 shadow-lg">
            <div class="h-full flex flex-col justify-center space-y-4">
              <img class="w-20 h-20 mx-auto rounded-full" src="{{asset('storage/profiles/profile-1.jpg')}}" alt="user avatar" height="220" width="220" loading="lazy">
              <p class="text-gray-600 md:text-xl"> <span class="font-serif">"</span> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat repellat perspiciatis excepturi est. Non ipsum iusto aliquam consequatur repellat provident, omnis ut, sapiente voluptates veritatis cum deleniti repudiandae ad doloribus. <span class="font-serif">"</span></p>
              <div>
                  <h6 class="text-lg font-semibold leading-none">Jane Doe</h6>
                  <span class="text-xs text-gray-500">Product Designer</span>
              </div>
            </div>
          </div>

          <div class="p-6 border border-gray-100 rounded-xl bg-gray-50 sm:flex sm:space-x-8 sm:p-8 shadow-lg">
            <img class="w-20 h-20 mx-auto rounded-full" src="{{asset('storage/profiles/profile-2.jpg')}}" alt="user avatar" height="220" width="220" loading="lazy">
            <div class="space-y-4 mt-4 text-center sm:mt-0 sm:text-left">
              <p class="text-gray-600"> <span class="font-serif">"</span> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat repellat perspiciatis excepturi est. Non ipsum iusto aliquam consequatur repellat provident, omnis ut, sapiente voluptates veritatis cum deleniti repudiandae ad doloribus. <span class="font-serif">"</span></p>
              <div>
                  <h6 class="text-lg font-semibold leading-none">Jane Doe</h6>
                  <span class="text-xs text-gray-500">Product Designer</span>
              </div>
            </div>
          </div>
          <div class="p-6 border border-gray-100 rounded-xl bg-gray-50 sm:flex sm:space-x-8 sm:p-8 shadow-lg">
            <img class="w-20 h-20 mx-auto rounded-full" src="{{asset('storage/profiles/profile-3.jpg')}}" alt="user avatar" height="220" width="220" loading="lazy">
            <div class="space-y-4 mt-4 text-center sm:mt-0 sm:text-left">
              <p class="text-gray-600"> <span class="font-serif">"</span> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat repellat perspiciatis excepturi est. Non ipsum iusto aliquam consequatur repellat provident, omnis ut, sapiente voluptates veritatis cum deleniti repudiandae ad doloribus. <span class="font-serif">"</span></p>
              <div>
                  <h6 class="text-lg font-semibold leading-none">Jane Doe</h6>
                  <span class="text-xs text-gray-500">Product Designer</span>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>



@endsection
