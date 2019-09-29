<?php $__env->startSection('pagetile', 'admin'); ?>
<?php $__env->startSection('content'); ?>

<section class="content-header">
      <h1>
        General Deinjer
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Core Layer</li>
      </ol>
        <div>
                        <div class="card-body form-horizontal">
                        <div class="box">
            <div class="box-header">
              <h3 class="box-title">List Puskesmas / Klinik</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-striped">
                <tbody><tr>
                  <th># </th>
                  <th>Nama Klinik / Puskesmas</th>
                  <th>Alamat</th>
                  <th>Actions</th>
                </tr>
                <?php $__currentLoopData = $informasis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $informasi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($informasi->id); ?></td>
                  <td><?php echo e($informasi->nama); ?></td>
                  <td><?php echo e($informasi->alamat); ?></td>
                  <td><a class="btn btn-block btn-success btn-xs" href="<?php echo e(url('admin/klinik/show/'.$informasi->id)); ?>"><i>Show</i></a>
                  <a class="btn btn-block btn-success btn-xs" href="<?php echo e(url('admin/klinik/create/'.$informasi->id)); ?>"><i>delete</i></a>
                  </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody></table>
            </div>
            </div>
            </div>
            </div>
            </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pi-baru\resources\views/admin/klinik/index.blade.php ENDPATH**/ ?>