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
                    <button class="absolute top-0 right-0 sm:hidden mb-0" >
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                    <span class="uppercase font-bold text-xl">Meritland</span>
                    <nav>
                        <a href="{{ route('dashboard') }}"
                            class="capitalize text-lg flex space-x-2 active:bg-indigo-900 hover:bg-indigo-900 p-2 rounded-md sm:text-sm items-center justify-start md:text-lg">
                            <span>
                                <svg class="w-6 h-6 sm:w-4 sm:h-4 md:w-6 md:h-6" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                    </path>
                                </svg>
                            </span>
                            <span>Dashboard</span>
                        </a>
                    </nav>
                </div>
                <a href="">Logout</a>
            </div>
            <div class="flex flex-col w-full items-start justify-start col-span-full sm:col-span-4">
                <div class="w-full bg-white">
                    <div>
                        
                    </div>
                </div>
                <div>
                    Body
                </div>
            </div>
        </div>
    </div>

</body>

</html>
