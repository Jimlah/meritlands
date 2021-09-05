@extends('layouts.main')

@section('content')
    @if (url()->current() == route('blog.show', $post->slug))
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    @endif
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
                    <span class="font-bold text-sm text-gray-400">{{ $post->published_at->diffForHumans() }}</span>
                </div>
                <div class="flex flex-col space-y-5 text-gray-900 dark:text-gray-50 py-10 md:order-first">
                    <div class="flex flex-col space-y-3 text-gray-400">
                        <h3 class="font-bold text-lg">Share</h3>
                        <div class="flex items-center justify-start space-x-3">
                            <a href="https://twitter.com/intent/tweet?url={{ url()->current() }}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 16 16">
                                    <path fill="#03A9F4"
                                        d="M16 3.539a6.839 6.839 0 0 1-1.89.518 3.262 3.262 0 0 0 1.443-1.813 6.555 6.555 0 0 1-2.08.794 3.28 3.28 0 0 0-5.674 2.243c0 .26.022.51.076.748a9.284 9.284 0 0 1-6.761-3.431 3.285 3.285 0 0 0 1.008 4.384A3.24 3.24 0 0 1 .64 6.578v.036a3.295 3.295 0 0 0 2.628 3.223 3.274 3.274 0 0 1-.86.108 2.9 2.9 0 0 1-.621-.056 3.311 3.311 0 0 0 3.065 2.285 6.59 6.59 0 0 1-4.067 1.399c-.269 0-.527-.012-.785-.045A9.234 9.234 0 0 0 5.032 15c6.036 0 9.336-5 9.336-9.334 0-.145-.005-.285-.012-.424A6.544 6.544 0 0 0 16 3.539z" />
                                </svg>
                            </a>
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 16 16">
                                    <path fill="#1976D2"
                                        d="M14 0H2C.897 0 0 .897 0 2v12c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2V2c0-1.103-.897-2-2-2z" />
                                    <path fill="#FAFAFA" fill-rule="evenodd"
                                        d="M13.5 8H11V6c0-.552.448-.5 1-.5h1V3h-2a3 3 0 0 0-3 3v2H6v2.5h2V16h3v-5.5h1.5l1-2.5z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
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
