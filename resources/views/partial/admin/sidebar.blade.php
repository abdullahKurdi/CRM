@php
    $current_page = \Route::currentRouteName();
@endphp

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion {{Session::get('sidebar_toggled')}}" id="accordionSidebar">

    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('supervisor.index')}}">
        <div class="sidebar-brand-icon ">
            {{--            <i class="fas fa-laugh-wink"></i>--}}
            <img src="{{asset('assets/img/system/logo.png')}}" class="img-fluid" alt="logo" width="60PX">
        </div>
        <div class="sidebar-brand-text mx-2">EXTENSY<sup> v2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    @role(['admin'])
    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{route('admin.index')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
    @endrole





    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle" onclick="sidebarToggled()"></button>
    </div>

</ul>
<!-- End of Sidebar -->
<script>
    function sidebarToggled(){
        $(function(){
            $.ajax({url: "{{route('sidebar')}}", success: function(result){console.log(result)}});
        });
    }
</script>
