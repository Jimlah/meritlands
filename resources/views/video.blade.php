@extends('layouts.main')

@section('content')
    <section class="px-5 sm:px-10 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 py-10 gap-5">
        @foreach ($videos as $video)
            <x-video :video="$video"></x-video>
        @endforeach
    </section>
@endsection
