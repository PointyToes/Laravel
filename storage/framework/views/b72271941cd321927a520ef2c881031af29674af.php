<?php $__env->startSection('pagetile', 'admin'); ?>
<?php $__env->startSection('content'); ?>

<section class="content-header">
      <h1>
        General Form Elements
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Show Layer</li>
      </ol>
        <div>
            <form action="<?php echo e(route('updateInformasi')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?> 
                    <div class="row">
                    <div class="card-body form-horizontal">
                        <div class="col-md-6">
                            <div class="form-group col-md-9">
                            <input type="hidden" name="id" value="<?php echo e($informasi->id); ?>">
                                <label for="example-text-input" required>Nama Klinik / Puskesmas</label>
                                <input type="text" class="form-control" id="example-text-input" name="nama" value="<?php echo e($informasi->nama); ?>" required>
                            </div>
                            <div class="form-group col-sm-9">
                            <input type="hidden" name="id_jenis" value="<?php echo e($informasi->jenis); ?>">
                                <label for="example-text-input" required>Jenis Klinik / Puskesmas</label>
                                <select type="date" class="form-control" id="example-text-input" name="jenis" value="<?php echo e($informasi->jenis); ?>" required>
                                    <option disabled selected value="<?php echo e($informasi->jenis); ?>"><?php echo e($informasi->jenis); ?></option>
                                    <option value="Klinik" selected>Klinik</option>
                                    <option value="Puskesmas">Puskesmas</option>     
                                </select> 
                            </div>
                            <div class="form-group col-md-9">
                                <label for="example-text-input">Alamat</label>
                                <textarea type="text" class="form-control" id="example-text-input" name="alamat" placeholder="Masukan Alamat"><?php echo e($informasi->alamat); ?></textarea>
                            </div>
                            <div class="form-group col-md-9 + row-md-3">
                                <label for="example-text-input" required>No. Telepon</label>
                                <input type="text" class="form-control" id="example-text-input" name="telepon" value="<?php echo e($informasi->telepon); ?>" required>
                            </div>
                            <div class="form-group col-md-9">
                                <label for="example-text-input" required>Jam Buka</label>
                                <input type="text" class="form-control" id="example-text-input" name="jam_buka" value="<?php echo e($informasi->jam_buka); ?>" placeholder="jam buka" required>
                            </div>
                            <div class="form-group col-md-9">
                                <label for="example-text-input" required>Url Koordinat</label>
                                <input type="text" class="form-control" id="example-text-input" name="koordinat" placeholder="url Koordinat" value="<?php echo e($informasi->koordinat); ?>" required>
                            </div>
                            <div class="form-group col-sm-9">
                                <label for="example-text-input">Foto</label>
                                <img name="foto" src="<?php echo e(asset('puskesmas/'.$informasi->foto)); ?>" style="width: 500px"> 
                            </div>
                            <div class="form-group col-sm-9">
                                <label for="example-text-input">Foto</label>
                                <input type="file" id="example-text-input" name="foto"> 
                            </div>
                            <div class="form-group col-md-8">
                                <button type="submit" class="btn btn-hero-success">Update</button>
                            </div>
                    </div>
                        <div class="col-md-6">
                        <div class="card-body form-horizontal">
                        <iframe src="<?php echo e($informasi->koordinat); ?>" width="900" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </form>
        </div>
    </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pi-baru\resources\views/admin/klinik/show.blade.php ENDPATH**/ ?>