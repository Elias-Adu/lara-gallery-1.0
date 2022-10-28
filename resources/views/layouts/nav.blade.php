{{-- responsive navbar  --}}
<nav x-data="{ open: false }" class="flex items-center justify-between flex-wrap relative p-6 text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium text-sm px-5">
    <div class="flex items-center flex-shrink-0 text-white mr-6" >
      {{-- <svg class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg> --}}
      <img class="fill-current h-8 w-8 mr-2" width="54" height="54" src="{{asset('storage/polaroid.svg')}}" alt="polaroid svg" srcset="">
      <span class="font-semibold text-xl tracking-tight">LaraGallery 1.0</span>
    </div>
    <div class="block lg:hidden ">
      <button @click="open = ! open" class="flex items-center px-3 py-2 border rounded text-gray-100 border-gray-100 hover:text-white hover:border-white navBtn">
        <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" ><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
      </button>
    </div>

    {{-- !fix z-index of slidebar menu && transition --}}

    <div x-bind:class="! open ? 'hidden' : ''"
        {{-- @click.away ="open = false" --}}
        {{-- style="position: absolute; top: 100%; width: 100%; z-index: 99;" --}}
      class="sm:z-20 w-full flex-grow lg:flex lg:items-center lg:w-auto lg:z-auto">
      <div class="text-sm lg:text-base lg:font-semibold lg:flex-grow font-bold">
        <a href="/" class="block mt-4 lg:inline-block lg:mt-0 text-gray-100 hover:text-black mr-4">
          Home
        </a>
        <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-gray-100 hover:text-black mr-4">
          About
        </a>
        <a href="/projects" class="block mt-4 lg:inline-block lg:mt-0 text-gray-100 hover:text-black mr-4">
          Projects
        </a>
        <a href="/blog" class="block mt-4 lg:inline-block lg:mt-0 text-gray-100 hover:text-black mr-4">
          Blog
        </a>
        <a href="/contact" class="block mt-4 lg:inline-block lg:mt-0 text-gray-100 hover:text-black">
          Hire me
        </a>
      </div>
      {{-- @if (Auth::check())
        <div class="text-sm lg:flex-grow">
          <h3>{{ $user->name }}</h3>
        </div>
      @endif --}}
      <div>
        @if (Auth::check())
        <form action="/logout"
          method="POST">
          @csrf
        <button type="submit" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-fuchsia-700 hover:bg-white mt-4 lg:mt-0">Logout</button>
      </form>
        @else
        <a href="/register" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-fuchsia-700 hover:bg-white mt-4 lg:mt-0">SignUp</a>
        @endif
      </div>
    </div>
  </nav>
