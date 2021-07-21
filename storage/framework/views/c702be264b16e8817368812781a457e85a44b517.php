<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>

    <div class="bg-white items-center max-w-xl p-2 shadow-lg space-y-4 ">

        <?php if(session('title')): ?>
            <div x-data="{ show: true }" x-show="show" class="flex justify-between items-center bg-red-200 border-l-2 border-red-500 text-red-700 px-4 py-3" role="alert">
                <div>
                    <p class="font-bold"><?php echo e(session('title')); ?></p>
                    <p><?php echo e(session('content')); ?></p>
                </div>
                <div>
                    <button type="button" @click="show = false" class="px-2 text-red-900">
                        <span class="text-2xl">&times;</span>
                    </button>
                </div>
            </div>
        <?php endif; ?>

        <form method="POST" action="<?php echo e(url('/dashboard/post/create')); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <span class="block mb-2">
                <label for="file" id="file">Choose a article to import</label>
                <input type="file" name="file" class="py-1 w-full">
            </span>
            <span class="flex mb-2 space-x-5">
                <button type="submit" class="bg-green-500 flex hover:bg-green-700 px-3 py-1 rounded text-white">Create</button>
                <a href="<?php echo e(route('dashboard')); ?>" class="bg-green-500 flex hover:bg-green-700 px-3 py-1 rounded text-white">Cancel</a>
            </span>
        </form>
            <span class="flex mb-2 space-x-5">
            </span>
    </div>

 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH /var/www/html/resources/views/dashboard/create.blade.php ENDPATH**/ ?>