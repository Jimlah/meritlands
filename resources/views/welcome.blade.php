<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ env('APP_NAME') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

    </style>
</head>

<body class="antialiased">
    <x-navbar></x-navbar>
    <header class="grid grid-cols-1 gap-5 md:grid-cols-2">
        <div class="px-5 pt-10 flex items-center justify-start md:px-10">
            <div class="text-gray-700 text-left flex flex-col items-start space-y-5">
                <h1 class="font-bold capitalize text-2xl leading-7 tracking-wide">dolor repellat sit temporibus odio ad
                    necessitatibus aperiam accusantium quisquam optio</h1>
                <p class="text-xl text-gray-500 text-opacity-95">Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. Nihil, reiciendis quibusdam eos possimus perferendis aspernatur tempore nostrum laudantium
                    obcaecati?</p>
                <button
                    class="bg-gray-900 text-gray-100 px-5 font-bold text-2xl py-2 rounded-full capitalize">subscribe</button>
            </div>
        </div>

        <div class="w-full px-5 md:px-10 bg-center bg-cover bg-no-repeat"
            style="background-image: url('https://www.pngkey.com/png/full/930-9308360_geometric-shapes-wallpaper-shapes-png.png')">
            <img class="w-full"
                src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/c7175f9e-9418-4ffa-92ca-589cc9d8c73a/d7jej8q-fc31a869-9d33-4a8b-9b34-421ede8ded09.gif?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2M3MTc1ZjllLTk0MTgtNGZmYS05MmNhLTU4OWNjOWQ4YzczYVwvZDdqZWo4cS1mYzMxYTg2OS05ZDMzLTRhOGItOWIzNC00MjFlZGU4ZGVkMDkuZ2lmIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.N2Vft3ZtEKbQpdtiEuSQbx_HFn1DWM490Y_qP39q32M"
                alt="" />
        </div>
    </header>

    <section class="px-5 py-10 grid-cols-1 gap-5 grid md:px-10 md:py-20 md:justify-items-center">
        <div class="flex flex-col justify-center items-left space-y-4 md:items-center">
            <h2 class="tracking-widest text-sm uppercase text-gray-400">My Newsletter</h2>
            <p class="text-2xl font-semibold leading-7 tracking-wide text-left md:w-1/2 md:text-center">Lorem ipsum
                dolor sit, amet consectetur adipisicing elit. Unde hic consequuntur, sapiente molestiae perspiciatiss
            </p>
        </div>
        <div
            class="flex flex-col justify-center items-left space-y-4 md:flex-row md:w-1/2 md:space-x-3 md:items-center">
            <div class="h-36 w-36 border rounded-full bg-cover bg-center bg-no-repeat"
                style="background-image: url('https://images.unsplash.com/photo-1578489758854-f134a358f08b?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzZ8fHBlcnNvbnxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&w=1000&q=80')">
            </div>
            <article class="text-gray-400 leading-5 text-sm tracking-wider max-w-md">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, vitae! Quis ullam quas odit vel
                    facilis dolor quam ex ducimus expedita, quae sunt obcaecati voluptatibus, incidunt atque voluptates
                    corporis labore!</p>
                <p class="mt-3">
                    <span class="font-bold text-xl text-gray-900">Tema Gray</span><br />
                    <span class="text-xs">Leading Developer</span>
                </p>
            </article>
        </div>
    </section>
    <footer>
        <div
            class="bg-gray-900 px-5 md:px-10 flex flex-col items-left md:items-center space-y-2 md:space-y-0 justify-between md:flex-row text-gray-400 py-8 font-bold">
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
