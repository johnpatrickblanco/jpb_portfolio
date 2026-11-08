<section class="flex flex-col justify-center pt-10 md:pt-20 pb-32" id="home">
    <div class="flex flex-col md:flex-row items-center gap-8 overflow-hidden justify-between">
        <div class="md:w-1/2">
            <div class="reveal" data-direction="left" style="--reveal-delay: 0.2s">
                <h1 class="text-4xl md:text-6xl font-bold mb-6 text-gray-900 dark:text-white">
                    Hi, I'm <span class="bg-gradient-to-r from-purple-600 to-blue-500 bg-clip-text text-transparent">JP</span>
                </h1>
                <h2 class="text-2xl md:text-4xl font-semibold mb-6 text-gray-600 dark:text-gray-300">
                    Bachelor of Science in Information Technology
                </h2>
                <p class="text-lg text-gray-500 dark:text-gray-400 mb-8">
                    I'm always eager to learn new technologies and explore exciting opportunities that help me grow and expand my skills.
                </p>
                <div class="flex gap-4">
                    <button
                        type="button"
                        data-scroll="projects"
                        class="px-6 py-3 rounded-full bg-gradient-to-r from-purple-600 to-blue-500 text-white hover:opacity-90 transition-opacity"
                    >
                        View My Work
                    </button>
                    <button
                        type="button"
                        data-scroll="contact"
                        class="px-6 py-3 rounded-full border border-gray-700 text-gray-900 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors"
                    >
                        Contact Me
                    </button>
                </div>
            </div>
        </div>

        <div class="justify-end flex">
            <div class="reveal relative mx-auto md:ml-auto" data-direction="right" style="--reveal-delay: 0.2s">
                <img
                    src="{{ asset(config('portfolio.site.avatar')) }}"
                    alt="avatar"
                    class="rounded-full w-4/5 xl:w-[90%] mx-auto md:ml-auto h-full object-contain"
                    width="350"
                    height="350"
                >
            </div>
        </div>
    </div>

    <div class="reveal mt-16 flex justify-center gap-6" data-direction="up" style="--reveal-delay: 0.5s">
        @foreach (config('portfolio.social') as $link)
            <a
                href="{{ $link['url'] }}"
                target="_blank"
                rel="noopener noreferrer"
                class="text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white transition-colors"
                aria-label="{{ $link['name'] }}"
            >
                <x-icon name="{{ $link['icon'] }}" class="w-6 h-6" />
            </a>
        @endforeach
    </div>
</section>