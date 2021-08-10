<nav class="px-5 flex items-center justify-between w-full static md:px-10 text-gray-700 dark:text-gray-200"
    x-data="dropdown">
    <span class="font-bold text-4xl py-6 "> MeritLand </span>
    <div class="flex items-center space-x-2ww" x-data="darkmode">
        <button x-on:click="change">
            <svg class="w-8 h-8" :class="{'hidden': dark == false}" fill="none" stroke="currentColor"
                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z">
                </path>
            </svg>
            <svg class="w-6 h-6" :class="{'hidden': dark == true}" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
            </svg>
        </button>
        <button x-on:click="toggle" class="md:hidden">
            <svg class="w-10 h-10" :class="{'hidden': open == false}" fill="none" stroke="currentColor"
                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                </path>
            </svg>
            <svg class="w-10 h-10" :class="{'hidden': open == true}" fill="none" stroke="currentColor"
                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>
    <div class="absolute flex top-0 left-0 h-full mr-0 mt-24 md:flex space-y-7 flex-col md:flex-row md:space-y-0 md:space-x-3 px-5 text-2xl font-bold bg-gray-900 text-gray-100 py-14 w-full md:relative md:w-min md:bg-transparent md:text-gray-900 md:dark:text-gray-200 md:py-0 md:min-h-0 md:mt-0"
        :class="{'hidden': open == true}">
        <a href="" class="md:hover:text-opacity-50 md:dark:hover:text-opacity-50">About</a>
        <a href="" class="md:hover:text-opacity-50 md:dark:hover:text-opacity-50">Blog</a>
        <span class="flex space-x-2 items-center md:hidden">
            <a href="" class="md:hover:text-opacity-50 md:dark:hover:text-opacity-50">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 16 16">
                    <path fill="#03A9F4"
                        d="M16 3.539a6.839 6.839 0 0 1-1.89.518 3.262 3.262 0 0 0 1.443-1.813 6.555 6.555 0 0 1-2.08.794 3.28 3.28 0 0 0-5.674 2.243c0 .26.022.51.076.748a9.284 9.284 0 0 1-6.761-3.431 3.285 3.285 0 0 0 1.008 4.384A3.24 3.24 0 0 1 .64 6.578v.036a3.295 3.295 0 0 0 2.628 3.223 3.274 3.274 0 0 1-.86.108 2.9 2.9 0 0 1-.621-.056 3.311 3.311 0 0 0 3.065 2.285 6.59 6.59 0 0 1-4.067 1.399c-.269 0-.527-.012-.785-.045A9.234 9.234 0 0 0 5.032 15c6.036 0 9.336-5 9.336-9.334 0-.145-.005-.285-.012-.424A6.544 6.544 0 0 0 16 3.539z" />
                </svg>
            </a>
            <a href="" class="md:hover:text-opacity-50 md:dark:hover:text-opacity-50">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 16 16">
                    <path fill="#1976D2"
                        d="M14 0H2C.897 0 0 .897 0 2v12c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2V2c0-1.103-.897-2-2-2z" />
                    <path fill="#FAFAFA" fill-rule="evenodd"
                        d="M13.5 8H11V6c0-.552.448-.5 1-.5h1V3h-2a3 3 0 0 0-3 3v2H6v2.5h2V16h3v-5.5h1.5l1-2.5z"
                        clip-rule="evenodd" />
                </svg>
            </a>
        </span>
    </div>
</nav>

<script>
    const dropdown = () => ({
        open: true,
        toggle() {
            this.open = !this.open;
        }
    })

    const darkmode = () => ({
        dark: localStorage.theme === 'dark' ? false : true,
        mode: this.dark ? 'light' : 'dark',
        change() {
            this.dark = !this.dark;
            this.mode = this.dark ? 'light' : 'dark';
            localStorage.theme = this.mode;
            displayMode();
        }
    })

    function displayMode() {
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark')
        } else {
            document.documentElement.classList.remove('dark')
        }
    }
    displayMode();
</script>
