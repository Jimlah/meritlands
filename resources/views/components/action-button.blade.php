<span class="flex space-x-2 items-center justify-start static" x-data="{modal: false}">
    <a href="{{ route($show, $slug) }}" class="text-blue-500 hover:text-blue-900">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z">
            </path>
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
            </path>
        </svg>
    </a>
    <a href="{{ route($edit, $index) }}" class="text-green-500 hover:text-blue-900">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
            </path>
        </svg>
    </a>
    <button class="text-red-500 hover:text-red-900 focus:outline-none" x-on:click="modal = true">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
            </path>
        </svg>
    </button>

    <div class="fixed bg-transparent top-0 -left-3 h-screen w-full flex flex-col items-center justify-center"
        x-bind:class="!modal ? 'hidden' : ''">
        <div
            class="p-5 bg-white rounded-lg max-w-xs w-full flex flex-col justify-center items-center space-y-4 shadow-sm">
            <span class="rounded-full bg-red-300 text-red-500 p-2">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z">
                    </path>
                </svg>
            </span>
            <h2 class="text-gray-900 text-lg font-medium">
                Delete Resource
            </h2>
            <p class="text-gray-500 text-center w-full whitespace-normal">
                Are you sure you want to delete this resource?
            </p>
            <form action="{{ route($delete, $index) }}" method="POST" class="w-full flex flex-col space-y-2">
                @csrf
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit"
                    class="bg-red-500 hover:bg-red-700 text-white font-bold text-xl tracking-wider focus:outline-none w-full py-2 rounded-md">Delete</button>
                <button x-on:click="modal = false" type="button"
                    class="border border-gray-500 border-opacity-50 hover:border-opacity-100 hover:border-red-700 text-red-500 font-bold text-xl tracking-wider focus:outline-none w-full py-2 rounded-md">Cancel</button>
            </form>

        </div>
    </div>
</span>
