@extends('layouts.main')

@section('content')
    <section class="px-10 pt-10 pb-16 bg-gray-900">
        @foreach ($posts as $post)
            @if ($loop->first)
                <div class="grid grid-cols-1 md:gap-16 md:grid-cols-2">
                    <div class="bg-cover bg-center bg-no-repeat rounded-xl h-48 sm:h-72 md:h-full"
                        style="background-image:url('{{ $post->image }}');">

                    </div>
                    <div class="text-white flex flex-col space-y-3 justify-start items-start py-10">
                        <span class="font-bold tracking-widest text-lg text-gray-200">The Latest</span>
                        <h2 class="text-4xl font-bold">
                            {{ $post->title }}
                        </h2>
                        <p class="font-bold text-gray-500 text-xl leading-6 max-h-48 break-words overflow-y-hidden">
                            {{ $post->content }}
                        </p>
                        <a href="" class="group capitalize text-sm hover:opacity-50 flex items-center space-x-2">
                            <span>read more</span>
                            <span class="group-hover:inline-block">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </span>
                        </a>
                        <span class="text-base text-gray-400">
                            Posted in
                            <span class="italic text-red-500">
                                {{ $post->category }}
                            </span>
                        </span>

                    </div>
                </div>
            @endif
        @endforeach
    </section>
    <section class="grid grid-cols-1 gap-x-16 gap-y-10 px-10 py-16 md:grid-cols-2">
        <div class="flex flex-col space-y-10 h-full overflow-hidden">
            @foreach ($posts as $post)
                <x-blog-panel></x-blog-panel>
            @endforeach
            <div class="flex justify-between">
                @if (!$posts->onFirstPage())
                    <a href={{ $posts->previousPageUrl() }}
                        class="flex items-center px-3 py-2 rounded-full space-x-2 bg-gray-900 hover:bg-transparent border-2 hover:border-gray-900 text-gray-50 hover:text-gray-900 font-bold">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                        </svg>
                        <span>Prev</span>
                    </a>
                @endif
                @if ($posts->hasMorePages())
                    <a href={{ $posts->nextPageUrl() }}
                        class="flex items-center px-3 py-2 rounded-full space-x-2 bg-gray-900 hover:bg-transparent border-2 hover:border-gray-900 text-gray-50 hover:text-gray-900 font-bold">
                        <span>Next</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 5l7 7m0 0l-7 7m7-7H3">
                            </path>
                        </svg>
                    </a>
                @endif
            </div>
        </div>
        <hr class="md:hidden ">
        <div class="">
            <h2>Top Views</h2>
            <div class="flex flex-col items-center w-3/4 space-y-5">
                <div class="flex flex-col items-left justify-start space-y-2 mt-5">
                    <span class="font-semibold text-opacity-50 text-gray-900">April 13, 2018</span>
                    <h3 class="font-bold text-3xl">Minimal Twitter</h3>
                    <p
                        class="text-base tracking-tight leading-5 text-opacity-50 text-gray-900 max-h-40 overflow-hidden break-words text-left">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum tenetur quibusdam veritatis tempora
                        eveniet ipsum adipisci, maiores deserunt nesciunt hic quis soluta rem accusamus cupiditate quasi ad
                        fuga dignissimos tempore.
                    </p>
                </div>
                <hr class="bg-gray-900 w-full">
                <div class="flex flex-col items-left justify-start space-y-2 mt-5">
                    <span class="font-semibold text-opacity-50 text-gray-900">April 13, 2018</span>
                    <h3 class="font-bold text-3xl">Minimal Twitter</h3>
                    <p
                        class="text-base tracking-tight leading-5 text-opacity-50 text-gray-900 h-40 overflow-hidden break-words text-left">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum tenetur quibusdam veritatis tempora
                        eveniet ipsum adipisci, maiores deserunt nesciunt hic quis soluta rem accusamus cupiditate quasi ad
                        fuga dignissimos tempore.
                    </p>
                </div>
            </div>
        </div>

    </section>
@endsection
