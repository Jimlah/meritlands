@extends('layouts.main')

@section('content')
    <style>
        iframe {
            width: 100%;
            height: 100%;
        }

    </style>

    @if (url()->current() == route('video.show', $video->slug))
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    @endif
    <section class="w-full px-5 sm:px-10 py-10 grid grid-cols-1 lg:grid-cols-4 gap-5 lg:gap-10">
        <div class="w-full col-span-full lg:col-span-3 flex flex-col">
            <div class="h-72 md:h-96 w-full">
                {!! $videoDisplay !!}
                <h2 class="text-gray-900 dark:text-gray-50">{{ $video->title }}</h2>
            </div>

            <div class="mt-32">
                @comments(['model' => $video])
            </div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-1 gap-5">
            @foreach ($topVideos as $video)
                <x-video :video="$video"></x-video>
            @endforeach
        </div>
    </section>

@endsection
