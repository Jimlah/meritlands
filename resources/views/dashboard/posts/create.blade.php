@extends('layouts.dashboard')

@section('content')
    <x-section>
        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data"
            class="w-full flex flex-col justify-start space-y-5">
            @csrf
            <x-input type="text" name="title" label="Title" placeholder="Enter your title" :error="$errors"
                value="{{ old('title') }}"></x-input>
            <div>
                <label for="content"
                    class="text-normal font-bold text-gray-900 text-opacity-50 dark:text-gray-500">Content</label>
                <textarea name="content" id="content" cols="30" rows="10"
                    class="w-full focus:outline-none border px-3 py-2 rounded-md text-gray-900 bg-transparent dark:text-gray-50 hover:border-gray-900 dark:hover:border-gray-50 ckeditor">{{ old('content') }}</textarea>
            </div>
            <x-input type="file" name="image" label="Image" :error="$errors" value="{{ old('image') }}"></x-input>

            <x-input type="text" name="category" label="Category" placeholder="Enter the category" :error="$errors"
                value="{{ old('category') }}">
            </x-input>
            <div class="flex items-center justify-start space-x-3">
                <button type="submit" name="save"
                    class="bg-blue-500 text-white px-3 py-2 font-bold uppercase rounded">save</button>
                <button type="submit" name="publish"
                    class="bg-green-500 text-white px-3 py-2 font-bold uppercase rounded">publish</button>
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
