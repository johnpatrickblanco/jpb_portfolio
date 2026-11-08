<footer class="border-t border-gray-200 dark:border-gray-800 py-12">
    <div class="max-w-7xl mx-auto">
        <div class="flex flex-col md:flex-row justify-between items-center gap-8">
            <div class="text-center md:text-left">
                <button
                    type="button"
                    data-scroll="home"
                    class="text-2xl font-bold bg-gradient-to-r from-purple-600 to-blue-500 bg-clip-text text-transparent"
                >
                    John Patrick
                </button>
                <p class="text-gray-500 dark:text-gray-400 mt-2">
                    Building digital experiences that matter
                </p>
            </div>

            <div class="flex flex-col items-center md:items-end gap-4">
                <div class="flex gap-6">
                    @foreach (config('portfolio.social') as $link)
                        <a
                            href="{{ $link['url'] }}"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white transition-colors"
                            aria-label="{{ $link['name'] }}"
                        >
                            <x-icon name="{{ $link['icon'] }}" class="w-5 h-5" />
                        </a>
                    @endforeach
                </div>
                <p class="text-gray-500 dark:text-gray-400 text-sm">
                    © {{ date('Y') }} John Patrick P. Blanco. All rights reserved.
                </p>
            </div>
        </div>
    </div>
</footer>