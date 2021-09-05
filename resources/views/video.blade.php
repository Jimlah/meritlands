@extends('layouts.main')

@section('content')
    <section class="px-5 sm:px-10 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 py-10 gap-5">
        @if ($videos->count() > 0)
            @foreach ($videos as $video)
                <x-video :video="$video"></x-video>
            @endforeach
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
