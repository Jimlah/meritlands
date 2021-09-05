@extends('layouts.main')

@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <section>
        <div class="bg-gray-900 px-10 h-[150px] md:h-[200px] py-20">
        </div>
        <div class=" px-5 sm:px-16 md:px-20">
            <div class="w-full rounded-2xl -mt-24 h-60 sm:h-72 md:h-screen bg-center bg-no-repeat bg-cover"
                style="background-image:url('{{ $post->image }}');">

            </div>
            <div class="grid grid-cols-1 md:grid-cols-4 mt-10">
                <div class="flex flex-col space-y-5 text-gray-900 py-10 md:col-span-3">
                    <h2 class="text-3xl font-bold dark:text-gray-50">{{ $post->title }}</h2>
                    <article class="text-opacity-90 leading-6 tracking-wider text-lg text-gray-500">
                        {!! $post->content !!}
                    </article>
                    <span class="font-bold text-sm text-gray-400">{{ $post->published_at }}</span>
                </div>
                <div class="flex flex-col space-y-5 text-gray-900 dark:text-gray-50 py-10 md:order-first">
                    <div class="flex flex-col space-y-3 text-gray-400">
                        <h3 class="font-bold text-lg">Share</h3>
                        <div>
                            <a href="https://twitter.com/intent/tweet?url={{ url()->current() }}">twitter</a>
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}">facebook</a>
                        </div>
                    </div>
                    <div class="flex flex-col space-y-3 text-gray-400">
                        <h3 class="font-bold text-lg">Details</h3>
                        <div class="flex flex-col items-start justify-start">
                            <span>{{ $post->category }}</span>
                            <span href="">{{ $post->views }} views</span>
                            <span href="">{{ $post->comments->count() }} comments</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <section class="px-5 sm:px-10">
        @comments([
        'model' => $post,
        ])
    </section>
@endsection
