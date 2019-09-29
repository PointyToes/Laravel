@extends('master')
@section('pagetile', 'admin')
@section('content')

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
        <form action="{{route('updateInformasi')}}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="row">
                <div class="card-body form-horizontal">
                    <div class="col-md-6">
                        <div class="form-group col-md-9">
                            <input type="hidden" name="id_tarian" value="{{$informasi->id_tarian}}">
                            <label for="example-text-input" required>Judul Tarian Tradisional</label>
                            <input type="text" class="form-control" id="example-text-input" name="nama_tarian"
                                value="{{$informasi->nama_tarian}}" required>
                        </div>
                        <div class="form-group col-md-9">
                            <label for="example-text-input">Deskripsi</label>
                            <textarea type="text" class="form-control" id="example-text-input" name="deskripsi"
                                placeholder="Masukan Alamat">{{$informasi->deskripsi}}</textarea>
                        </div>
                        <div class="form-group col-md-9 + row-md-3">
                            <label for="example-text-input" required>Video Link</label>
                            <input type="text" class="form-control" id="example-text-input" name="video"
                                value="{{$informasi->video}}" required>
                        </div>
                        <div class="form-group col-md-9">
                            <label for="example-text-input" required>Provinsi</label>
                            <input type="text" class="form-control" id="example-text-input" name="provinsi"
                                value="{{$informasi->provinsi}}" placeholder="jam buka" required>
                        </div>
                        <div class="form-group col-sm-9">
                            <label for="example-text-input">Foto Tarian</label>
                            <img name="foto" src="{{asset('foto_tarian/'.$informasi->foto)}}" style="width: 200px">
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

@endsection