<div class="flex items-center justify-start pt-5 space-x-2">
    <!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->
    <a href="{{ $paginator->previousPageUrl() }}"
        class="p-2 text-blue-500 rounded-full bg-gray-200 dark:bg-gray-700 {{ !$paginator->onFirstPage() ? 'hover:bg-gray-700' : '' }}">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
        </svg>
    </a>
    <span class="font-medium text-sm text-gray-500">
        {{ $paginator->currentPage() }}
    </span>
    <a href="{{ $paginator->nextPageUrl() }}"
        class="p-2 text-blue-500 rounded-full bg-gray-200 dark:bg-gray-700 {{ $paginator->hasMorePages() ? 'hover:bg-gray-700' : '' }}"
        disabled>
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
        </svg>
    </a>
</div>
