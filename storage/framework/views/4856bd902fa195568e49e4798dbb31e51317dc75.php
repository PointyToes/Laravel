
<?php $__env->startSection('pagetitle', 'admin'); ?>
<?php $__env->startSection('content'); ?>
<section class="content-header">
      <h1>
        Indonesian Folks Dance
        <small>Admin Dashboard</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Admin</li>
      </ol>
</section>
<section class="content-header">
    <div>
        <h1>Selamat Datang di Area Halaman Admin</h1>
    </div>
    <div class="feature-img text-center">
        <img class="img-fluid" alt="" src="<?php echo e(asset('foto_tarian/04.jpg')); ?>">
    </div>
    <div class="text-center">
        <h1>Ini adalah halaman pengolahan data tarian</h1>
    </div>
</section>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /storage/ssd2/352/9577352/resources/views/admin/dashboard.blade.php ENDPATH**/ ?>