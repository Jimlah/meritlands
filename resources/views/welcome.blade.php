@extends('layouts.main')

@section('content')
    <header class="grid grid-cols-1 gap-5 md:grid-cols-2 text-gray-700 dark:text-gray-200">
        <div class="px-5 pt-10 flex items-center justify-start md:px-10">
            <div class="text-left flex flex-col items-start space-y-5">
                <h1 class="font-bold capitalize text-2xl leading-7 tracking-wide">dolor repellat sit temporibus odio ad
                    necessitatibus aperiam accusantium quisquam optio</h1>
                <p class="text-xl text-gray-500 text-opacity-50 dark:text-opacity-75">Lorem ipsum dolor sit amet
                    consectetur adipisicing
                    elit. Nihil, reiciendis quibusdam eos possimus perferendis aspernatur tempore nostrum laudantium
                    obcaecati?</p>
                <button
                    class="bg-gray-900 dark:bg-gray-700 hover:bg-opacity-50 text-gray-100 px-5 font-bold text-2xl py-2 rounded-full capitalize">subscribe</button>
            </div>
        </div>

        <div class="w-full px-5 md:px-10 bg-center bg-cover bg-no-repeat"
            style="background-image: url('https://www.pngkey.com/png/full/930-9308360_geometric-shapes-wallpaper-shapes-png.png')">
            <img class="w-full"
                src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/c7175f9e-9418-4ffa-92ca-589cc9d8c73a/d7jej8q-fc31a869-9d33-4a8b-9b34-421ede8ded09.gif?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2M3MTc1ZjllLTk0MTgtNGZmYS05MmNhLTU4OWNjOWQ4YzczYVwvZDdqZWo4cS1mYzMxYTg2OS05ZDMzLTRhOGItOWIzNC00MjFlZGU4ZGVkMDkuZ2lmIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.N2Vft3ZtEKbQpdtiEuSQbx_HFn1DWM490Y_qP39q32M"
                alt="" />
        </div>
    </header>
    <section class="px-5 py-16 grid-cols-1 gap-5 grid md:px-16 md:py-20 md:justify-items-center">
        <div class="flex flex-col justify-center items-left space-y-4 md:items-center">
            <h2 class="tracking-widest text-sm uppercase text-gray-400">My Newsletter</h2>
            <p class="text-3xl dark:text-gray-200 font-semibold leading-7 tracking-wide text-left md:w-1/2 md:text-center">
                Lorem ipsum
                dolor sit, amet consectetur adipisicing elit. Unde hic consequuntur, sapiente molestiae perspiciatiss
            </p>
        </div>
        <div class="flex flex-col justify-center items-left space-y-4 md:flex-row md:w-1/2 md:space-x-3 md:items-center">
            <div class="h-36 w-36 border rounded-full bg-cover bg-center bg-no-repeat"
                style="background-image: url('https://images.unsplash.com/photo-1578489758854-f134a358f08b?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzZ8fHBlcnNvbnxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&w=1000&q=80')">
            </div>
            <article class="text-gray-700 leading-5 text-lg tracking-wider max-w-md">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, vitae! Quis ullam quas odit vel
                    facilis dolor quam ex ducimus expedita, quae sunt obcaecati voluptatibus, incidunt atque voluptates
                    corporis labore!</p>
                <p class="mt-3">
                    <span class="font-bold text-xl">Tema Gray</span><br />
                    <span class="text-xs">Leading Developer</span>
                </p>
            </article>
        </div>
    </section>
    <section class="md:px-10 md:py-20 flex items-center justify-center">
        <div
            class="bg-gray-300  bg-opacity-75 grid grid-cols-1 md:grid-cols-2 px-5 py-10 rounded-lg gap-5 max-w-3xl w-full place-item-center">
            <div class="flex flex-col items-start space-y-4">
                <span>
                    <svg class="w-10 h-10 text-gray-100" fill="#000" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7">
                        </path>
                    </svg>
                </span>
                <p class="font-bold leading-6 tracking-wide text-2xl">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo recusandae ducimus, incidunt illum
                    veniam quam aliquam.
                </p>
                <p class="leading-6 tracking-wide text-gray-500 text-sxl">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo recusandae ducimus, incidunt illum
                    veniam quam aliquam.
                </p>
            </div>
            <div class="flex items-center w-full justify-center">
                <form action="" method="POST" class="flex flex-col space-y-5 items-start w-full">
                    <input type="text" name="name" placeholder="firstname"
                        class="w-full rounded-full px-5 py-3 uppercase tracking-widest focus:outline-none" />
                    <input type="email" name="email" placeholder="Email Address"
                        class="w-full rounded-full px-5 py-3 uppercase tracking-widest focus:outline-none" />
                    <button type="submit"
                        class="bg-gray-900 hover:bg-opacity-70 text-gray-100 flex space-x-2 px-5 py-3 rounded-full">
                        <span class="w-full rounded-full uppercase tracking-widest">Join Now</span>
                        <span>
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </span>
                    </button>
                </form>
            </div>
        </div>
    </section>
    <section class="px-5 md:px-10 flex flex-col items-center justify-center py-16 md:py-20 space-y-5">
        <div class="flex flex-col items-center">
            <h2 class="text-2xl text-gray-400 tracking-wide">Get the latest</h2>
            <a href="{{ route('blog') }}" class="text-sm text-gray-500 hover:opacity-50">View All</a>
        </div>
        <div class="grid-cols-1 md:grid-cols-3 grid gap-20">
            @foreach ($posts as $post)
                <x-blog-panel :post="$post" />
            @endforeach
        </div>
    </section>
@endsection
