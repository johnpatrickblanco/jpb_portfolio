<section class="pb-20 pt-5" id="about">
    <div class="reveal">
        <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-900 dark:text-white">About Me</h2>
        <div class="w-20 h-1 bg-gradient-to-r from-purple-600 to-blue-500 mb-8"></div>
    </div>

    <div class="flex flex-col md:flex-row gap-12">
        <div class="reveal md:w-1/2" data-direction="left" style="--reveal-delay: 0.1s">
            <p class="text-gray-600 dark:text-gray-400 mb-6">
                I'm John Patrick P. Blanco, also known as JP, a BS Information Technology student at
                Data Center College of the Philippines – Bangued. I'm a curious and motivated student
                who enjoys trying new things, exploring technology, and continuously learning new skills.
            </p>
            <p class="text-gray-600 dark:text-gray-400 mb-6">
                I'm interested in coding, graphic design, and creating digital solutions that can be useful
                in real-life situations. I believe learning is a continuous process — I enjoy experimenting
                with new ideas and challenging myself to step outside my comfort zone.
            </p>
            <p class="text-gray-600 dark:text-gray-400 mb-6">
                When I'm not studying, I enjoy playing chess, which helps me develop patience, strategy,
                critical thinking, and problem-solving skills.
            </p>
            <p class="text-gray-600 dark:text-gray-400">
                My goal is to build a successful career in technology, continuously improve my skills,
                create meaningful solutions, and achieve financial independence.
            </p>
        </div>

        <div class="reveal md:w-1/2" data-direction="right" style="--reveal-delay: 0.1s">
            <h3 class="text-xl font-semibold mb-2 text-gray-900 dark:text-white">Technical Skills</h3>
            <p class="text-gray-500 dark:text-gray-400 text-sm mb-6">
                Technologies I am currently learning and developing.
            </p>
            <div class="flex flex-col gap-6">
                <?php $__currentLoopData = config('portfolio.skills'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category => $skills): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div>
                        <h4 class="text-sm font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400 mb-3">
                            <?php echo e($category); ?>

                        </h4>
                        <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
                            <?php $__currentLoopData = $skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div
                                    class="px-4 py-3 bg-gray-100 dark:bg-gray-900 rounded-xl flex items-center gap-2 border border-gray-200 dark:border-gray-800 hover:border-gray-400 dark:hover:border-gray-700 hover:bg-gray-200 dark:hover:bg-gray-800 transition-colors"
                                >
                                    <span
                                        class="w-5 h-5 shrink-0 flex items-center justify-center text-[11px] font-bold leading-none rounded"
                                        style="color: <?php echo e($skill['color']); ?>"
                                    >
                                        <?php echo e($skill['mark']); ?>

                                    </span>
                                    <span class="text-sm"><?php echo e($skill['name']); ?></span>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</section><?php /**PATH C:\xampp\htdocs\jp-portfolio\resources\views/partials/about.blade.php ENDPATH**/ ?>