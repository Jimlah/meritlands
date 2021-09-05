<div class="flex flex-col space-y-5">
    <!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->
    <div class="w-full h-72 bg-cover bg-center bg-no-repeat rounded-lg"
        style="background-image: url('{{ $post->image }}')">
    </div>
    <div class="w-full flex flex-col items-start space-y-3 max-h-48  overflow-y-hidden text-gray-900">
        <h3 class="font-bold text-3xl tracking-wider break-words dark:text-gray-200">{{ $post->title }}</h3>
        <p class="text-lg tracking-wide leading-5 text-justify break-words dark:text-gray-200 text-opacity-75">
            {!! $post->content !!}
        </p>
    </div>
    <a href={{ route('blog.show', ['slug' => $post->slug]) }}
        class="font-bold text-gray-900 dark:text-gray-100 flex space-x-2 group">
        <span>
            Read More
        </span>
        <span class="hidden group-hover:block">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3">
                </path>
            </svg>
        </span>
    </a>
</div>
