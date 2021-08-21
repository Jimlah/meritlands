@extends('layouts.dashboard')

@section('content')
    <x-section>
        <div class="flex items-center justify-start">
            <a href="{{ route('posts.create') }}"
                class="focus:outline-none bg-indigo-500 hover:bg-indigo-900 text-white px-2 py-1 flex space-x-0.5 rounded items-center">
                <span>
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                </span>
                <span>Create</span>
            </a>
        </div>
        <div class="overflow-x-auto w-full mt-2 scrollbar-x rounded-lg">
            <table class="w-full table-auto text-left rounded-lg overflow-hidden">
                <thead class="bg-gray-500 text-white text-sm font-bold">
                    <tr class="">
                        <x-col-head>
                            Image
                        </x-col-head>
                        <x-col-head>
                            Title
                        </x-col-head>
                        <x-col-head>
                            Category
                        </x-col-head>
                        <x-col-head>
                            Status
                        </x-col-head>
                        <x-col-head>
                            Action
                        </x-col-head>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <x-row>
                            <x-col>
                                <div class="bg-center bg-cover bg-no-repeat h-10 w-10 rounded-full"
                                    style="background-image: url('{{ $post->image }}');">

                                </div>
                            </x-col>
                            <x-col>
                                <span class="overflow-ellipsis">
                                    {{ $post->title }}
                                </span>
                            </x-col>
                            <x-col>
                                <span class="">{{ $post->category }}</span>
                            </x-col>
                            <x-col>
                                <span class="">
                                    <span
                                        class="badge badge-success">{{ $post->is_published ? 'Published' : 'Draft' }}</span>
                                </span>
                            </x-col>
                            <x-col>
                                <x-action-button show="posts.show" edit="posts.edit" delete="posts.destroy"
                                    :index="$post->id"></x-action-button>
                            </x-col>
                        </x-row>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div>
            <x-pagination :paginator="$posts"></x-pagination>
        </div>
    </x-section>
@endsection()
