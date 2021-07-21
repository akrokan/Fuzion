<?php if (isset($component)) { $__componentOriginal68fd1716d3649640b85d625349a99a37b7434812 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\DashboardLayout::class, []); ?>
<?php $component->withName('dashboard-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>

    <table class="md:mx-auto md:w-2/3 table-fixed shadow-lg bg-white">
        <thead>
            <tr class="bg-blue-100 text-left">
                <td class="px-2 py-2">Author</td>
                <td class="px-2 py-2">Content</td>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>          
            <tr>
                <td class="px-2 py-2"><?php echo e($comment->name); ?></td>
                <td class="px-2 py-2"></<td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

 <?php if (isset($__componentOriginal68fd1716d3649640b85d625349a99a37b7434812)): ?>
<?php $component = $__componentOriginal68fd1716d3649640b85d625349a99a37b7434812; ?>
<?php unset($__componentOriginal68fd1716d3649640b85d625349a99a37b7434812); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH /var/www/html/resources/views/dashboard/comments.blade.php ENDPATH**/ ?>