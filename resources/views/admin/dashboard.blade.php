@extends('master')
@section('pagetitle', 'admin')
@section('content')
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
        <img class="img-fluid" alt="" src="{{asset('foto_tarian/04.jpg')}}">
    </div>
    <div class="text-center">
        <h1>Ini adalah halaman pengolahan data tarian</h1>
    </div>
</section>
    
@endsection