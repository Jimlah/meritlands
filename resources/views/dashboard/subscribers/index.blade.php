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
                    <tr class="___class_+?6___">
                        <x-col-head>
                            Firstname
                        </x-col-head>
                        <x-col-head>
                            Email
                        </x-col-head>
                        <x-col-head>
                            Created At
                        </x-col-head>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($subscribers as $subscriber)
                        <x-row>
                            <x-col>
                                <span class="overflow-ellipsis">
                                    {{ $subscriber->firstname }}
                                </span>
                            </x-col>
                            <x-col>
                                <span class="overflow-ellipsis">
                                    {{ $subscriber->email }}
                                </span>
                            </x-col>
                            <x-col>
                                <span class="___class_+?9___">{{ $subscriber->created_at->format('Y-m-d') }}</span>
                            </x-col>
                        </x-row>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div>
            <x-pagination :paginator="$subscribers"></x-pagination>
        </div>
    </x-section>
@endsection()
