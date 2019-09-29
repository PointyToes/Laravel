@extends('master')
@section('pagetile', 'admin')
@section('content')

<section class="content-header">
    <h1>
        Tambah Data Tarian Tradisional
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Beranda</a></li>
        <li><a class="active">Buat Baru</a></li>
    </ol>
    <div>
        <form action="{{route('createInformasi')}}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="card-body form-horizontal">
                <div class="form-group col-md-9">
                    <label for="example-text-input" required>Judul Tarian Tradisional</label>
                    <input type="text" class="form-control" id="example-text-input" name="nama_tarian"
                        placeholder="Masukkan Judul Tarian Tradisionalnya">
                </div>
                <div class="form-group col-md-9">
                    <label for="example-text-input">Deskripsi</label>
                    <textarea type="text" class="form-control" id="example-text-input" name="deskripsi"
                        placeholder="Masukan Deskripsi Tentang Tariannya"></textarea>
                </div>
                <div class="form-group col-md-9">
                    <label for="example-text-input">Video Link</label>
                    <textarea type="text" class="form-control" id="example-text-input" name="video"
                        placeholder="Masukan Deskripsi Tentang Tariannya"></textarea>
                </div>
                <div class="form-group col-md-9">
                    <label for="example-text-input" required>Provinsi</label>
                    <input type="text" class="form-control" id="example-text-input" name="provinsi"
                        placeholder="Masukan Asal Provinsi Tariannya" required>
                </div>
                <div class="form-group col-sm-9">
                    <label for="example-text-input" required>Foto Tarian</label>
                    <input type="file" id="example-text-input" name="foto" required>
                </div>
                <div class="form-group col-md-8">
                    <button type="submit" class="btn btn-default btn-success">SIMPAN</button>
                </div>
            </div>
        </form>
    </div>
</section>

@endsection
