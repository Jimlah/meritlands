<a href="{{ route($route) }}"
    class="capitalize text-lg flex space-x-2 active:bg-indigo-900 hover:bg-indigo-900 p-2 rounded-md sm:text-sm items-center justify-start md:text-lg {{ url()->current() == route($route) ? 'bg-indigo-900' : '' }}">
    <span>
        {{ $slot }}
    </span>
    <span>{{ $routeName }}</span>
</a>
