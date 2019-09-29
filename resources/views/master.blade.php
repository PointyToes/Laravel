<!DOCTYPE html>
<html lang="en">

@php
    $user = App\User::where('id',Auth::id())->first();
@endphp

@include('element.head')
<body class="hold-transition skin-blue sidebar-mini">
    
    @include('element.navbar')
    
    @include('element.sidebar')
    
<div class="content-wrapper">
    
    @yield('content')

</div> 
    @include('element.footer')

    @include('element.script')
    
    @yield('scripts')

</body>
</html>