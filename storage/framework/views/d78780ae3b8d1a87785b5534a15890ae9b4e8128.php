<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>

    <div class="max-w-prose mx-auto">
        <article>
            <h1><?php echo e($post->title); ?></h3>
            <?php echo e(Illuminate\Mail\Markdown::parse($post->content)); ?>

        </article>
        <div class=" border-t-2 my-6">
            <?php if(!$post->comments->isempty()): ?>
                <?php $__currentLoopData = $post->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <span class="font-bold"><?php echo e($comment->author); ?></span>
                    <span><?php echo e($comment->content); ?></span>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <span class="font-extralight">No comments yet: be the first!</span>
            <?php endif; ?>
        </div>
    </div>

 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH /var/www/html/resources/views/show.blade.php ENDPATH**/ ?>