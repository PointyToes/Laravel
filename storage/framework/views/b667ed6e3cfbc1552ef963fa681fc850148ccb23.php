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
            <form action="<?php echo e(route('createInformasi')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?> 
                    <div class="card-body form-horizontal">
                            <div class="form-group col-md-9">
                                <label for="example-text-input" required>Nama Klinik / Puskesmas</label>
                                <input type="text" class="form-control" id="example-text-input" name="nama" placeholder="Masukkan Nama Klinik / Puskesmas">
                            </div>
                            <div class="form-group col-sm-9">
                                <label for="example-text-input" required>Jenis Klinik / Puskesmas</label>
                                <select type="date" class="form-control" id="example-text-input" name="jenis" required>
                                    <option disabled selected>Pilih</option>
                                    <option value="Klinik">Klinik</option>
                                    <option value="Puskesmas">Puskesmas</option>     
                                </select> 
                            </div>
                            <div class="form-group col-md-9">
                                <label for="example-text-input">Alamat</label>
                                <textarea type="text" class="form-control" id="example-text-input" name="alamat" placeholder="Masukan Alamat"></textarea>
                            </div>
                            <div class="form-group col-md-9">
                                <label for="example-text-input" required>Url Koordinat</label>
                                <input type="text" class="form-control" id="example-text-input" name="koordinat" placeholder="url Koordinat" required>
                            </div>
                            <div class="form-group col-md-9">
                                <label for="example-text-input" required>Jam Buka</label>
                                <input type="text" class="form-control" id="example-text-input" name="jam_buka" placeholder="jam buka" required>
                            </div>
                            <div class="form-group col-md-9 + row-md-3">
                                <label for="example-text-input" required>No. Telepon</label>
                                <textarea type="text" class="form-control" id="example-text-input" name="telepon" placeholder="Masukkan No. Telp" required></textarea>
                            </div>
                            <div class="form-group col-sm-9">
                                <label for="example-text-input" required>Foto</label>
                                <input type="file" id="example-text-input" name="foto" required> 
                            </div>
                            <div class="form-group col-md-8">
                                <button type="submit" class="btn btn-hero-success">Save</button>
                            </div>
                    </div>
            <!-- /.box-body -->
          </div>
                        </div>
                    </div>
                </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pi-baru\resources\views/admin/klinik/create.blade.php ENDPATH**/ ?>