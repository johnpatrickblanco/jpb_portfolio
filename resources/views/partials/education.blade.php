<section class="pb-20 pt-5" id="education">
    <div class="reveal">
        <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-900 dark:text-white">Education</h2>
        <div class="w-20 h-1 bg-gradient-to-r from-purple-600 to-blue-500 mb-8"></div>
    </div>

    <div class="flex flex-col gap-8">
        @foreach (config('portfolio.education') as $index => $edu)
            <div
                class="reveal bg-gray-100 dark:bg-gray-900 rounded-2xl p-6 md:p-8 border border-gray-200 dark:border-gray-800"
                data-direction="up"
                style="--reveal-delay: {{ $index * 0.1 }}s"
            >
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-2 mb-4">
                    <h3 class="text-sm font-semibold uppercase tracking-wider text-blue-600 dark:text-blue-400">
                        {{ $edu['level'] }}
                    </h3>
                </div>
                <h4 class="text-xl font-semibold text-gray-900 dark:text-white mb-1">{{ $edu['school'] }}</h4>
                @if ($edu['program'])
                    <p class="text-gray-600 dark:text-gray-300 mb-3">{{ $edu['program'] }}</p>
                @endif
                <ul class="flex flex-wrap gap-x-6 gap-y-1 text-gray-600 dark:text-gray-400">
                    @foreach ($edu['details'] as $detail)
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-purple-500"></span>
                            {{ $detail }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endforeach
    </div>
</section>