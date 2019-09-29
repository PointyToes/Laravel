<!DOCTYPE html>
<html lang="en">

<?php
    $user = App\User::where('id',Auth::id())->first();
?>

<?php echo $__env->make('element.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body class="hold-transition skin-blue sidebar-mini">
    
    <?php echo $__env->make('element.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <?php echo $__env->make('element.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
<div class="content-wrapper">
    
    <?php echo $__env->yieldContent('content'); ?>

</div> 
    <?php echo $__env->make('element.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('element.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <?php echo $__env->yieldContent('scripts'); ?>

</body>
</html><?php /**PATH C:\xampp7\htdocs\viharna\resources\views/master.blade.php ENDPATH**/ ?>