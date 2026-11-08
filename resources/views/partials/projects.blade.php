<section class="py-20" id="projects">
    <div class="reveal">
        <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-900 dark:text-white">My Projects</h2>
        <div class="w-20 h-1 bg-gradient-to-r from-purple-600 to-blue-500 mb-8"></div>
        <p class="text-gray-500 dark:text-gray-400 max-w-3xl mb-12">
            Here are some of my recent projects. Each one was built to solve a specific problem or explore new technologies.
        </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach (config('portfolio.projects') as $index => $project)
            <div
                class="reveal bg-gray-100 dark:bg-gray-900 rounded-xl overflow-hidden border border-gray-200 dark:border-gray-800 hover:border-gray-400 dark:hover:border-gray-700 transition-colors"
                data-direction="up"
                style="--reveal-delay: {{ $index * 0.2 }}s; --reveal-duration: 0.75s"
            >
                @php
                    $images = $project['images'] ?? array_filter([$project['image'] ?? null]);
                @endphp

                @if (count($images))
                    <div class="relative overflow-hidden" data-carousel>
                        <div class="overflow-hidden">
                            <div class="flex transition-transform duration-500 ease-out" data-carousel-track>
                                @foreach ($images as $image)
                                    <img
                                        src="{{ asset($image) }}"
                                        alt="{{ $project['name'] }}"
                                        class="w-full aspect-video object-cover shrink-0 select-none"
                                        loading="lazy"
                                        draggable="false"
                                    >
                                @endforeach
                            </div>
                        </div>

                        @if (count($images) > 1)
                            <button
                                type="button"
                                data-carousel-prev
                                class="absolute left-3 top-1/2 -translate-y-1/2 flex h-9 w-9 items-center justify-center rounded-full bg-black/50 text-white hover:bg-black/70 transition-colors"
                                aria-label="Previous image"
                            >
                                <x-icon name="chevron-left" class="w-5 h-5" />
                            </button>
                            <button
                                type="button"
                                data-carousel-next
                                class="absolute right-3 top-1/2 -translate-y-1/2 flex h-9 w-9 items-center justify-center rounded-full bg-black/50 text-white hover:bg-black/70 transition-colors"
                                aria-label="Next image"
                            >
                                <x-icon name="chevron-right" class="w-5 h-5" />
                            </button>
                            <div class="absolute bottom-3 left-1/2 -translate-x-1/2 flex gap-1.5">
                                @foreach ($images as $imageIndex => $image)
                                    <button
                                        type="button"
                                        data-carousel-dot
                                        class="carousel-dot h-2 w-2 rounded-full bg-white/60"
                                        aria-label="Go to image {{ $imageIndex + 1 }}"
                                    ></button>
                                @endforeach
                            </div>
                        @endif
                    </div>
                @endif

                <div class="p-6">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">{{ $project['name'] }}</h3>
                        <div class="flex gap-3">
                            @if ($project['githubUrl'])
                                <a
                                    href="{{ $project['githubUrl'] }}"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white transition-colors"
                                    aria-label="GitHub"
                                >
                                    <x-icon name="github" class="w-5 h-5" />
                                </a>
                            @endif
                            @if ($project['liveUrl'])
                                <a
                                    href="{{ $project['liveUrl'] }}"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white transition-colors"
                                    aria-label="Live Demo"
                                >
                                    <x-icon name="external" class="w-5 h-5" />
                                </a>
                            @endif
                        </div>
                    </div>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">{{ $project['description'] }}</p>
                    @if ($project['status'])
                        <p class="text-blue-600 dark:text-blue-400 text-sm mb-4 font-medium">
                            {{ $project['status'] }}
                        </p>
                    @endif
                    <div class="flex flex-wrap gap-2">
                        @foreach ($project['technologies'] as $tech)
                            <span class="px-3 py-1 text-xs bg-gray-200 dark:bg-gray-800 rounded-full text-gray-700 dark:text-gray-300">
                                {{ $tech }}
                            </span>
                        @endforeach
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>