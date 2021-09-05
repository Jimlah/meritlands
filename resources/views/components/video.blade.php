<div class="w-full flex flex-col space-y-2">
    <a href={{ route('video.show', $video->slug) }} class="bg-center bg-no-repeat bg-cover h-40 w-full inline-block"
        style="background-image: url('https://i.pcmag.com/imagery/articles/00Cx7vFIetxCuKxQeqPf8mi-23.1580943870.fit_lim.jpg')">

    </a>
    <div class="flex flex-col space-y-1 justify-start items-start text-xl text-gray-900 dark:text-gray-50">
        <span class="capitalize font-bold  whitespace-normal break-words">
            {{ $video->title }}
        </span>
        <div class="flex space-x-2 items-center justify-center text-sm text-gray-500 font-semibold">
            <span class="capitalize">{{ $video->views }} views</span>
            <span class="capitalize">{{ $video->created_at->diffForHumans() }}</span>
        </div>
    </div>
</div>
