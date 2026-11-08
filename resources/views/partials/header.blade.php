<header class="reveal is-visible sticky top-0 z-50 bg-white/80 dark:bg-gray-950/80 backdrop-blur-md">
    <nav class="max-w-7xl mx-auto flex justify-between items-center py-6 px-4 sm:px-6 lg:px-8">
        <button
            type="button"
            data-scroll="home"
            class="flex items-center gap-3 group"
        >
            <span
                class="flex items-center justify-center w-11 h-11 rounded-2xl bg-gradient-to-br from-purple-600 to-blue-500 text-white text-base font-black shadow-lg shadow-purple-600/30 group-hover:scale-105 transition-transform"
            >
                JP
            </span>
            <span class="text-2xl font-bold bg-gradient-to-r from-purple-600 to-blue-500 bg-clip-text text-transparent">
                John Patrick P. Blanco
            </span>
        </button>

        <!-- Desktop Navigation -->
        <ul class="hidden md:flex space-x-8">
            @foreach (config('portfolio.nav') as $link)
                <li>
                    <button
                        type="button"
                        data-scroll="{{ $link['href'] }}"
                        class="text-gray-600 hover:text-gray-900 dark:text-gray-300 dark:hover:text-white transition-colors"
                    >
                        {{ $link['name'] }}
                    </button>
                </li>
            @endforeach
        </ul>

        <div class="flex items-center gap-4">
            <!-- Theme toggle -->
            <button
                id="themeToggle"
                type="button"
                aria-label="Toggle theme"
                class="p-2 rounded-full text-gray-600 hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-800 transition-colors"
            >
                <span id="iconSun" class="hidden"><x-icon name="sun" class="w-6 h-6" /></span>
                <span id="iconMoon"><x-icon name="moon" class="w-6 h-6" /></span>
            </button>

            <!-- Mobile menu button -->
            <button
                id="menuToggle"
                type="button"
                aria-label="Toggle menu"
                class="md:hidden text-gray-600 hover:text-gray-900 dark:text-gray-300 dark:hover:text-white focus:outline-none"
            >
                <span id="menuIcon"><x-icon name="menu" class="w-6 h-6" /></span>
                <span id="closeIcon" class="hidden"><x-icon name="x" class="w-6 h-6" /></span>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div
            id="mobileMenu"
            class="mobile-menu fixed top-16 left-0 right-0 bg-white dark:bg-gray-900 z-50 shadow-2xl md:hidden border-b border-gray-200 dark:border-gray-800"
        >
            <div class="flex flex-col p-6">
                <ul class="flex flex-col space-y-6">
                    @foreach (config('portfolio.nav') as $link)
                        <li>
                            <button
                                type="button"
                                data-scroll="{{ $link['href'] }}"
                                class="text-gray-600 hover:text-gray-900 dark:text-gray-300 dark:hover:text-white text-lg transition-colors"
                            >
                                {{ $link['name'] }}
                            </button>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </nav>
</header>