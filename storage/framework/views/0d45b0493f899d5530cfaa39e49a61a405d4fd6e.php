<?php $__env->startSection('content'); ?>

<div class="bg-white items-center max-w-xl p-2 shadow-lg space-y-4 ">

    <?php if($errors->any()): ?>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="text-red-600"><?php echo e($error); ?></div>        
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>

    <form method="POST" action="<?php echo e(url('/dashboard/post/create')); ?>" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <span class="block mb-2">
            <label for="file" id="file">Select file</label>
            <input type="file" name="file" class="py-1 w-full">
        </span>
        <span class="flex mb-2 space-x-5">
            <button type="submit" class="bg-green-500 flex hover:bg-green-700 px-3 py-1 rounded text-white">Create</button>
            <button class="bg-green-500 flex hover:bg-green-700 px-3 py-1 rounded text-white">Cancel</button>
        </span>
    </form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/create.blade.php ENDPATH**/ ?>