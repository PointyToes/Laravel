<!DOCTYPE html>
<html lang="en">
<?php
    $user = App\User::where('id',Auth::id())->first();
?>
<?php echo $__env->make('partials.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body class="hold-transition skin-blue sidebar-mini">
    
    
    <?php echo $__env->make('partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
<div class="content-wrapper">
            <?php echo $__env->yieldContent('content'); ?>
</div> 
        <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

     
            <?php echo $__env->make('partials.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('scripts'); ?>

</body>
</html><?php /**PATH C:\xampp7\htdocs\pi-baru\resources\views/master.blade.php ENDPATH**/ ?>