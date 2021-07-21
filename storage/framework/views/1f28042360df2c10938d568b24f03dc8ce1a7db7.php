<header class="flex justify-between items-center py-4 bg-white shadow">
<div class="container mx-auto">

    <nav class="flex">
        <a href="<?php echo e(route('home')); ?>" class="mr-6">Home</a>
        <a href="<?php echo e(route('blog')); ?>" class="mr-6">Blog</a>
        <a href="<?php echo e(route('contact')); ?>" class="mr-6">Contact</a>
        <?php if(auth()->guard()->guest()): ?>
            <a href="<?php echo e(route('login')); ?>" class="mr-6">Login</a>
            <a href="<?php echo e(route('register')); ?>" class="mr-6">Register</a>
        <?php else: ?>
            <a href="<?php echo e(route('logout')); ?>" class="mr-6" 
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">Logout</a>
            <form id="logout-form" method="POST" action="<?php echo e(route('logout')); ?>" style="display:none"><?php echo csrf_field(); ?></form>
        <?php endif; ?>
        <?php if(auth()->guard()->check()): ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin')): ?>
                <a href="<?php echo e(route('dashboard')); ?>" class="mr-6">Dashboard</a>
                <a href="<?php echo e(url('/dashboard/post/create')); ?>" class="mr-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 text-green-600 -my-2 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </a>
            <?php endif; ?>
        <?php endif; ?>
    </nav>

</div>
</header><?php /**PATH /var/www/html/resources/views/components/navbar.blade.php ENDPATH**/ ?>