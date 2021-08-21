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

<body class="antialiased dark:bg-gray-900 bg-gray-200">
    <div class="h-screen w-full overflow-hidden">
        <div class="w-full h-full grid grid-cols-5 relative" x-data="{open: false}">
            <div class="bg-indigo-600 dark:bg-gray-700 absolute h-full w-48 sm:relative sm:w-full sm:flex px-3 py-5 text-gray-50 flex flex-col justify-between"
                x-bind:class="!open ? 'hidden' : ''">
                <div class="flex flex-col space-y-5 static justify-start">
                    <span class="uppercase font-bold text-xl mt-0">Meritland</span>
                    <button class="absolute top-0 right-0 sm:hidden" x-on:click="open = false">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                    <nav class="flex flex-col space-y-3">
                        <x-nav-link route="dashboard" routeName="dashboard">
                            <svg class="w-6 h-6 sm:w-4 sm:h-4 md:w-6 md:h-6" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                </path>
                            </svg>
                        </x-nav-link>
                        <x-nav-link route="posts.index" routeName="posts">
                            <svg class="w-6 h-6 sm:w-4 sm:h-4 md:w-6 md:h-6" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z">
                                </path>
                            </svg>
                        </x-nav-link>
                    </nav>
                </div>
                <a href="">
                    <x-nav-link route="logout" routeName="logout">
                        <svg class="w-6 h-6 sm:w-4 sm:h-4 md:w-6 md:h-6" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                            </path>
                        </svg>
                    </x-nav-link>
                </a>
            </div>
            <div class="flex flex-col w-full items-start justify-start col-span-full sm:col-span-4">
                <div class="w-full bg-white flex px-2 py-3 items-center justify-between space-x-5">
                    <div class="flex items-center space-x-2">
                        <button x-on:click="open=true" class="sm:hidden">
                            <svg class="w-6 h-6 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </button>
                        <div>
                            <form action="" method="get"
                                class="flex items-center text-gray-500 border-b border-gray-500 space-x-3 py-1">
                                <span>
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                    </svg>
                                </span>
                                <input type="search" name="q" class="focus:outline-none" placeholder="Search...">
                            </form>
                        </div>

                    </div>
                    <a href="" class="flex items-center justify-start space-x-1 text-gray-500 hover:text-gray-900">
                        <span class="">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z">
                                </path>
                            </svg>
                        </span>
                        <span>Profile</span>
                    </a>
                </div>
                <div class=" w-full relative h-full">
                    <div class="w-full h-full overflow-y-scroll p-5 scrollbar-y absolute">
                        <div class="w-full mb-3">
                            <span class="font-bold uppercase text-lg text-gray-500">
                                {{ request()->path() }}
                            </span>
                        </div>
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
