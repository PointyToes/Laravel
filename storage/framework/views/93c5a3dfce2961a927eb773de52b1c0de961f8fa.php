<?php $__env->startSection('pagetile', 'admin'); ?>
<?php $__env->startSection('content'); ?>

<section class="content-header">
      <h1>
        Tambah Posting Tarian Tradisional
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Beranda</a></li>
        <li><a class="active">Buat Baru</a></li>
      </ol>
        <div>
            <form action="<?php echo e(route('createInformasi')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?> 
                    <div class="card-body form-horizontal">
                            <div class="form-group col-md-9">
                                <label for="example-text-input" required>Judul Tarian Tradisional</label>
                                <input type="text" class="form-control" id="example-text-input" name="nama" placeholder="Masukkan Judul Tarian Tradisionalnya">
                            </div>
                            <div class="form-group col-md-9">
                                <label for="example-text-input">Deskripsi</label>
                                <textarea type="text" class="form-control" id="example-text-input" name="alamat" placeholder="Masukan Deskripsi Tentang Tariannya"></textarea>
                            </div>
                            <div class="form-group col-md-9">
                                <label for="example-text-input" required>Provinsi</label>
                                <input type="text" class="form-control" id="example-text-input" name="koordinat" placeholder="Masukan Asal Provinsi Tariannya" required>
                            </div>
                            <div class="form-group col-sm-9">
                                <label for="example-text-input" required>Foto</label>
                                <input type="file" id="example-text-input" name="foto" required> 
                            </div>
                            <div class="form-group col-md-8">
                                <button type="submit" class="btn btn-default btn-success">SIMPAN</button>
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

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7\htdocs\pi-baru\resources\views/admin/klinik/create.blade.php ENDPATH**/ ?>