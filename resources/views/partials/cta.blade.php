<section class="py-20" id="contact">
    <div
        class="reveal bg-gradient-to-r from-purple-900/80 to-blue-900/80 rounded-2xl p-8 md:p-12 border border-gray-200 dark:border-gray-800"
        data-direction="up"
        style="--reveal-delay: 0.1s"
    >
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6 text-white">Let's Work Together!</h2>
            <div class="mb-8">
                <p class="text-gray-100 mb-4">
                    Prefer to talk it over? Feel free to call or text me anytime — I'd be
                    happy to answer your questions and help you get started!
                </p>
                <a
                    href="{{ config('portfolio.site.phoneHref') }}"
                    class="inline-flex items-center gap-3 text-2xl md:text-3xl font-bold bg-gradient-to-r from-purple-600 to-blue-500 bg-clip-text text-transparent"
                >
                    <x-icon name="phone" class="w-7 h-7" />
                    {{ config('portfolio.site.phoneDisplay') }}
                </a>
            </div>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a
                    href="https://www.facebook.com/johnpatrick.blanco.33/"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="px-8 py-4 rounded-full bg-gradient-to-r from-purple-600 to-blue-500 text-white hover:opacity-90 transition-opacity font-medium inline-flex items-center gap-2"
                >
                    <x-icon name="facebook" class="w-5 h-5" />
                    Message Me
                </a>
                <button
                    type="button"
                    data-scroll="projects"
                    class="px-8 py-4 rounded-full border border-gray-300 text-white hover:bg-gray-800/40 transition-colors font-medium"
                >
                    View My Work
                </button>
            </div>
        </div>
    </div>
</section>