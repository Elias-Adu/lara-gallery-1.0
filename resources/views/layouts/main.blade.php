<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

      <!-- Fonts -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
      {{-- google fonts --}}

      <!-- Scripts -->
      {{-- @stack('carouselScript') --}}
      @vite(['resources/css/app.css', 'resources/js/app.js'])
      <script type="text/javascript" src="{{asset('js/carousel.js')}} " defer></script>

    <title>Lara Gallery 1.0</title>
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen "
    x-data :class="$store.darkMode.on ? 'bg-gray-900': 'bg-gradient-to-br from-cyan-50 to-gray-200'">
        @include('layouts.nav')

        <!-- Page Content -->
        <main>
            @yield('content')
        </main>
        <div>
            @include("layouts.footer")
        </div>
    </div>
    {{-- flowbite --}}
    {{-- <script src="../path/to/flowbite/dist/flowbite.js"></sc> --}}
</body>
</html>
