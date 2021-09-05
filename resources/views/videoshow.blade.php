@extends('layouts.main')

@section('content')
    <style>
        iframe {
            width: 100%;
            height: 100%;
        }

    </style>
    @if (url()->current() == route('blog.show', $video->slug))
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    @endif
    <section class="w-full px-5 sm:px-10 py-10 grid grid-cols-1 lg:grid-cols-4 gap-5 lg:gap-10">
        <div class="w-full col-span-full lg:col-span-3">
            <div class="h-72 md:h-96 w-full">
                {!! $videoDisplay !!}
            </div>

            <div>
                comments
            </div>
        </div>
        <div>
            videos
        </div>
    </section>

@endsection
