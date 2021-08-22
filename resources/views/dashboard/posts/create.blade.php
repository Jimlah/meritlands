@extends('layouts.dashboard')

@section('content')
    <x-section>
        <form action="{{ route('posts.store') }}" method="POST" class="w-full flex flex-col justify-start space-y-5">
            @csrf
            <x-input type="text" name="title" label="Title" placeholder="Enter your title" :error="$errors"></x-input>
            <div>
                <label for="content"
                    class="text-normal font-bold text-gray-900 text-opacity-50 dark:text-gray-500">Content</label>
                <textarea name="content" id="content" cols="30" rows="10"
                    class="w-full focus:outline-none border px-3 py-2 rounded-md text-gray-900 bg-transparent dark:text-gray-50 hover:border-gray-900 dark:hover:border-gray-50"></textarea>
            </div>
            <x-input type="file" name="image" label="Image" :error="$errors"></x-input>

            <x-input type="text" name="category" label="Category" placeholder="Enter the category" :error="$errors">
            </x-input>
            <div class="flex items-center justify-start space-x-3">
                <button type="submit" name="save"
                    class="bg-blue-500 text-white px-3 py-2 font-bold uppercase rounded">save</button>
                <button type="submit" name="publish"
                    class="bg-green-500 text-white px-3 py-2 font-bold uppercase rounded">publish</button>
            </div>
        </form>
    </x-section>

@endsection()
