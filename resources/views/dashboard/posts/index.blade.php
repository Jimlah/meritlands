@extends('layouts.dashboard')

@section('content')
    <x-section>
        <div class="flex items-center justify-start">
            <a href=""
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
                        <th class="py-2 px-3 capitalize tracking-wider">Image</th>
                        <th class="py-2 px-3 capitalize tracking-wider">Title</th>
                        <th class="py-2 px-3 capitalize tracking-wider">Category</th>
                        <th class="py-2 px-3 capitalize tracking-wider">Status</th>
                        <th class="py-2 px-3 capitalize tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr class="">
                            <td class="py-2 px-3">
                                <div class="bg-center bg-cover bg-no-repeat h-10 w-10 rounded-full"
                                    style="background-image: url('{{ $post->image }}');">

                                </div>
                            </td>
                            <td class="py-2 px-3 whitespace-nowrap">
                                <span class="overflow-ellipsis">
                                    {{ $post->title }}
                                </span>
                            </td>
                            <td class="py-2 px-3">
                                <span class="">{{ $post->category }}</span>
                            </td>
                            <td class="py-2 px-3">
                                <span class="">
                                    <span
                                        class="badge badge-success">{{ $post->is_published ? 'Published' : 'Draft' }}</span>
                                </span>
                            </td>
                            <td class="py-2 px-3">
                                <a href="" class="badge badge-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </x-section>
@endsection()
