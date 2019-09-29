@extends('master')
@section('pagetile', 'admin')
@section('content')

<section class="content-header">
      <h1>
        Daftar Tarian Tradisional
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Beranda</a></li>
        <li class="active">Daftar Tarian</li>
      </ol>
        <div>
                        <div class="card-body form-horizontal">
                        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Daftar Tarian Tradisional</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-striped">
                <tbody><tr>
                  <th>Id Tarian</th>
                  <th>Nama Tarian</th>
                  <th>Deskripsi</th>
                  <th>Provinsi</th>
                </tr>
                @foreach ($informasis as $informasi)
                <tr>
                  <td>{{$informasi->id_tarian}}</td>
                  <td>{{$informasi->nama_tarian}}</td>
                  <td>{{$informasi->deskripsi}}</td>
                  <td>{{$informasi->provinsi}}</td>
                  <td><a class="btn btn-block btn-success btn-xs" href="{{url('admin/show/'.$informasi->id_tarian)}}"><i>tampil</i></a>
                  <a class="btn btn-block btn-success btn-xs" href="{{url('admin/destroy/'.$informasi->id_tarian)}}"><i>hapus</i></a>
                  </td>
                </tr>
                @endforeach
              </tbody></table>
            </div>
            </div>
            </div>
            </div>
            </div>
@endsection