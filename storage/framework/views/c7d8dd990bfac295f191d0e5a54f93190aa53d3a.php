
<?php $__env->startSection('pagetile', 'admin'); ?>
<?php $__env->startSection('content'); ?>

<section class="content-header">
    <h1>
        Data Tarian Tradisional
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Beranda</a></li>
        <li><a href="#"><i class="fa fa-home"></i> Daftar Tarian</a></li>
        <li class="active">Data Tarian</li>
    </ol>
    <div>
        <form action="<?php echo e(route('updateInformasi')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>

            <div class="row">
                <div class="card-body form-horizontal">
                    <div class="col-md-6">
                        <div class="form-group col-md-9">
                            <input type="hidden" name="id_tarian" value="<?php echo e($informasi->id_tarian); ?>">
                            <label for="example-text-input" required>Judul Tarian Tradisional</label>
                            <input type="text" class="form-control" id="example-text-input" name="nama_tarian"
                                value="<?php echo e($informasi->nama_tarian); ?>" required>
                        </div>
                        <div class="form-group col-md-9">
                            <label for="example-text-input">Deskripsi</label>
                            <textarea type="text" class="form-control" id="example-text-input" name="deskripsi"
                                placeholder="Masukan Alamat"><?php echo e($informasi->deskripsi); ?></textarea>
                        </div>
                        <div class="form-group col-md-9 + row-md-3">
                            <label for="example-text-input" required>Video Link</label>
                            <input type="text" class="form-control" id="example-text-input" name="video"
                                value="<?php echo e($informasi->video); ?>" required>
                        </div>
                        <div class="form-group col-md-9">
                            <label for="example-text-input" required>Provinsi</label>
                            <input type="text" class="form-control" id="example-text-input" name="provinsi"
                                value="<?php echo e($informasi->provinsi); ?>" placeholder="jam buka" required>
                        </div>
                        <div class="form-group col-sm-9">
                            <label for="example-text-input">Foto Tarian</label>
                            <img name="foto" src="<?php echo e(asset('foto_tarian/'.$informasi->foto)); ?>" style="width: 200px">
                        </div>
                        <div class="form-group col-sm-9">
                            <label for="example-text-input">Foto</label>
                            <input type="file" id="example-text-input" name="foto">
                        </div>
                        <div class="form-group col-md-8">
                            <button type="submit" class="btn btn-default btn-success">Update</button>
                        </div>
                    </div>
                </div>
        </form>
    </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /storage/ssd2/352/9577352/resources/views/admin/klinik/show.blade.php ENDPATH**/ ?>