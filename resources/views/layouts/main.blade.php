<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:locale" content="{{ str_replace('_', '-', app()->getLocale()) }}" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield('title', 'Meritland')" />
    <meta property="og:description" content="@yield('description', 'News from around the Globe to you.')" />
    <meta property="og:image"
        content="@yield('image', 'https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/c7175f9e-9418-4ffa-92ca-589cc9d8c73a/d7jej8q-fc31a869-9d33-4a8b-9b34-421ede8ded09.gif?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2M3MTc1ZjllLTk0MTgtNGZmYS05MmNhLTU4OWNjOWQ4YzczYVwvZDdqZWo4cS1mYzMxYTg2OS05ZDMzLTRhOGItOWIzNC00MjFlZGU4ZGVkMDkuZ2lmIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.N2Vft3ZtEKbQpdtiEuSQbx_HFn1DWM490Y_qP39q32M')" />
    <meta property="og:url" content="@yield('url', url()->current())" />
    <meta property="og:site_name" content="{{ env('APP_NAME') }}" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta name="keywords" content="@yield('meta_keywords', 'blog, news')" />

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
        <div class="font-bold text-3xl flex flex-col justify-start items-start space-y-5">
            <h2 class="font-bold">MERITLAND</h2>
            <div class="flex flex-col justify-start items-start text-sm space-y-2">
                <a href="tel:+2348138403802" class="flex items-center justify-start space-x-2 hover:text-gray-500">
                    <span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                            </path>
                        </svg>
                    </span>
                    <span>
                        +2348138403802
                    </span>
                </a>
                <a href="mailto:temituromerit@gmail.com"
                    class="flex items-center justify-start space-x-2 hover:text-gray-500">
                    <span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                            </path>
                        </svg>
                    </span>
                    <span>
                        temituromerit@gmail.com
                    </span>
                </a>
            </div>
        </div>
        <div class="flex flex-col space-y-2 justify-start items-start">
            <h3 class="text-2xl uppercase font-bold text-left">Popular topics</h3>
            <div class="grid grid-cols-2 gap-x-5 gap-y-0 font-bold text-base text-gray-900">
                @foreach ($categories as $category)
                    <a href="" class="hover:text-gray-500"
                        style="text-decoration: inherit; color: inherit;">{{ $category->category }}</a>
                @endforeach
            </div>
        </div>
        <div class="flex flex-col space-y-2 justify-start items-start">
            <h3 class="text-2xl uppercase font-bold text-left">Join My Newsletter</h3>
            <p>
                Do you want to receive our latest news and updates?
            </p>
            <a href="#subscribe"
                class="bg-gray-900 hover:bg-opacity-70 text-gray-100 flex space-x-2 px-5 py-3 rounded-full dark:text-gray-50"
                style="text-decoration: inherit;">
                Sign
                Up</a>
        </div>
    </section>
    <footer>
        <div
            class="bg-gray-900 px-5 md:px-10 flex flex-col items-left md:items-center space-y-2 md:space-y-0 justify-between md:flex-row text-gray-400 py-8 font-bold dark:border-t">
            <span> &copy2021 </span>
            <div
                class="flex flex-col md:flex-row md:items-center space-y-1 md:space-y-0 md:justify-center md:space-x-4">
                <a href="" style="text-decoration: inherit; color: inherit;">About</a>
                <a href={{ route('blog') }} style="text-decoration: inherit; color: inherit;">Blog</a>
                <a href={{ route('video.index') }} style="text-decoration: inherit; color: inherit;">Videos</a>
            </div>
            <a href="" style="text-decoration: inherit; color: inherit;">Privacy Policy</a>
        </div>
    </footer>
</body>

</html>
