<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('backend/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{$user->name}}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">Dashboard</li>
            <li class="">
                <a href="{{ url('/admin')}}">
                    <i class="fa fa-home"></i> <span>Beranda</span>
                </a>
            </li>
            <li class="header">Manajemen Posting</li>
            <li>
                <a href="{{route('createInformasi')}}">
                    <i class="fa fa-medkit"></i> <span>Input Tarian Baru</span>
                </a>
            </li>
            <li>
                <a href="{{route('indexInformasi')}}">
                    <i class="fa fa-list"></i> <span>Daftar Tarian Tradisional</span>
                </a>
            </li>
    </section>
    <!-- /.sidebar -->
</aside>