@extends('layouts.dashboard')

@section('content')
    <x-section>
        <form
            action="{{ url()->current() == route('videos.create') ? route('videos.store') : route('videos.update', $video?->id) }}"
            method="POST" enctype="multipart/form-data" class="w-full flex flex-col justify-start space-y-5">
            @csrf
            @if (url()->current() !== route('videos.create'))
                @method('PUT')
            @endif
            <x-input type="text" name="video_url" label="Video URl" placeholder="Enter your Video URl" :error="$errors"
                value="{{ $video?->video_url ?? old('video_url') }}"></x-input>
            <x-input type="text" name="title" label="Title" placeholder="Enter your Title" :error="$errors"
                value="{{ $video?->title ?? old('title') }}"></x-input>
            <x-input type="text" name="description" label="Description" placeholder="Enter your Description"
                :error="$errors" value="{{ $video?->description ?? old('description') }}"></x-input>
            <div class="flex items-center justify-start space-x-3">
                <button type="submit" name="save"
                    class="bg-blue-500 text-white px-3 py-2 font-bold uppercase rounded">submit</button>

            </div>
        </form>
    </x-section>
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script type="text/javascript">
        CKEDITOR.replace('content', {
            filebrowserUploadUrl: "{{ route('ckeditor.image-upload', ['_token' => csrf_token()]) }}",
            filebrowserUploadMethod: 'form'
        });
    </script>
@endsection()
