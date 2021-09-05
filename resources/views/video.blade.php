@extends('layouts.main')

@section('content')
    <section class="px-5 sm:px-10 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 py-10 gap-5">
        @if ($videos->count() > 0)
            @foreach ($videos as $video)
                <x-video :video="$video"></x-video>
            @endforeach
            <div class="flex justify-between col-span-full">
                @if (!$videos->onFirstPage())
                    <a href={{ $videos->previousPageUrl() }}
                        class="flex items-center px-3 py-2 rounded-full space-x-2 bg-gray-900 hover:bg-transparent border-2 hover:border-gray-900 text-gray-50 hover:text-gray-900 font-bold dark:hover:bg-gray-50">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                        </svg>
                        <span>Prev</span>
                    </a>
                @endif
                @if ($videos->hasMorePages())
                    <a href={{ $videos->nextPageUrl() }}
                        class="flex items-center px-3 py-2 rounded-full space-x-2 bg-gray-900 hover:bg-transparent border-2 hover:border-gray-900 text-gray-50 hover:text-gray-900 font-bold dark:hover:bg-gray-50">
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
        @else
            <div class="flex flex-col items-center justify-center">
                <h1 class="text-4xl font-bold text-gray-800">No videos found</h1>
                @auth
                    <p class="text-gray-600">
                        You can add videos by clicking the button below.
                    </p>
                @endauth
                <a href="{{ route('videos.create') }}" class="btn btn-primary">Add Video</a>
            </div>
        @endif

    </section>
@endsection
