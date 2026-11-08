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
                    src="<?php echo e(asset(config('portfolio.site.avatar'))); ?>"
                    alt="avatar"
                    class="rounded-full w-4/5 xl:w-[90%] mx-auto md:ml-auto h-full object-contain"
                    width="350"
                    height="350"
                >
            </div>
        </div>
    </div>

    <div class="reveal mt-16 flex justify-center gap-6" data-direction="up" style="--reveal-delay: 0.5s">
        <?php $__currentLoopData = config('portfolio.social'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a
                href="<?php echo e($link['url']); ?>"
                target="_blank"
                rel="noopener noreferrer"
                class="text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white transition-colors"
                aria-label="<?php echo e($link['name']); ?>"
            >
                <?php if (isset($component)) { $__componentOriginalce262628e3a8d44dc38fd1f3965181bc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icon','data' => ['name' => ''.e($link['icon']).'','class' => 'w-6 h-6']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => ''.e($link['icon']).'','class' => 'w-6 h-6']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalce262628e3a8d44dc38fd1f3965181bc)): ?>
<?php $attributes = $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc; ?>
<?php unset($__attributesOriginalce262628e3a8d44dc38fd1f3965181bc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalce262628e3a8d44dc38fd1f3965181bc)): ?>
<?php $component = $__componentOriginalce262628e3a8d44dc38fd1f3965181bc; ?>
<?php unset($__componentOriginalce262628e3a8d44dc38fd1f3965181bc); ?>
<?php endif; ?>
            </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</section><?php /**PATH C:\xampp\htdocs\jp-portfolio\resources\views/partials/hero.blade.php ENDPATH**/ ?>