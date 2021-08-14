<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ env('APP_NAME') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

    </style>
</head>

<body class="antialiased dark:bg-gray-900">
    <x-navbar></x-navbar>
    @yield('content')
    <section class="px-5 md:px-10 grid grid-col-1 md:grid-cols-3 gap-y-5 py-16 md:py-20 text-gray-900 bg-gray-300 ">
        <div class="">
            meritland
        </div>
        <div class="flex flex-col space-y-2 justify-start items-start">
            <h3 class="text-2xl uppercase font-bold text-left">Popular topics</h3>
            <div class="grid grid-cols-2 gap-x-5 gap-y-0 font-bold text-base text-gray-900">
                <a href="" class="hover:text-opacity-50">News</a>
                <a href="" class="hover:text-opacity-50">News</a>
                <a href="" class="hover:text-opacity-50">News</a>
                <a href="" class="hover:text-opacity-50">News</a>
                <a href="" class="hover:text-opacity-50">News</a>
            </div>
        </div>
        <div class="flex flex-col space-y-2 justify-start items-start">
            <h3 class="text-2xl uppercase font-bold text-left">Join My Newsletter</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias voluptatibus dolore quia eos consequatur
                beatae maiores excepturi. Officiis eligendi praesentium
            </p>
            <a href="" class="bg-gray-900 hover:bg-opacity-70 text-gray-100 flex space-x-2 px-5 py-3 rounded-full">Sign
                Up</a>
        </div>
    </section>
    <footer>
        <div
            class="bg-gray-900 px-5 md:px-10 flex flex-col items-left md:items-center space-y-2 md:space-y-0 justify-between md:flex-row text-gray-400 py-8 font-bold dark:border-t">
            <span> &copy2021 </span>
            <div
                class="flex flex-col md:flex-row md:items-center space-y-1 md:space-y-0 md:justify-center md:space-x-4">
                <a href="">About</a>
                <a href="">Blog</a>
                <a href="">Videos</a>
            </div>
            <a href="">Privacy Policy</a>
        </div>
    </footer>
</body>

</html>
