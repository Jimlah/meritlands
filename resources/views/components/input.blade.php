<div class="w-full flex flex-col items-start justify-center space-y-1">
    <!-- Simplicity is the essence of happiness. - Cedric Bledsoe -->
    <label for="{{ $name }}"
        class="text-normal font-bold text-gray-900 text-opacity-50 dark:text-gray-500">{{ $label }}</label>
    <input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" value="{{ $value }}"
        placeholder="{{ $placeholder }}"
        class="w-full focus:outline-none border px-3 py-2 rounded-md text-gray-900 bg-transparent dark:text-gray-50 hover:border-gray-900 dark:hover:border-gray-50">
    @if ($errors->has($name))
        <span class="text-xs font-light text-red-500 tracking-wider">{{ $errors->first($name) }}</span>
    @endif
</div>
