<nav class="px-5 flex items-center justify-between w-full static md:px-10" x-data="dropdown">
    <span class="font-bold text-4xl py-6 text-gray-700"> MeritLand </span>
    <div class="flex items-center space-x-2 static" x-data="darkmode">
        <button x-on:click="change">
            <svg class="w-8 h-8 text-gray-700" :class="{'hidden': dark == false}" fill="none" stroke="currentColor"
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
        <button x-on:click="toggle">
            <svg class="w-10 h-10 text-gray-700" :class="{'hidden': open == false}" fill="none" stroke="currentColor"
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
    <div class="absolute flex top-0 left-0 h-full mr-0 mt-24 md:flex space-y-7 flex-col px-5 text-2xl font-bold bg-gray-900 text-gray-100 py-14 w-full"
        :class="{'hidden': open == true}">
        <a href="">About</a>
        <a href="">Blog</a>
        <span class="flex space-x-2">
            <a href="">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207">
                    </path>
                </svg>
            </a>
            <a href="">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207">
                    </path>
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
