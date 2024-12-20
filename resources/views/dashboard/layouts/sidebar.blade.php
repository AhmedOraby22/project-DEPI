<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
            <a href="index.html" class="logo">
                <img
                        src="{{asset('dashboard_asset\assets\img\kaiadmin\logo_light.png')}}"
                        alt="navbar brand"
                        class="navbar-brand"
                        height="20"
                />
            </a>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                </button>
            </div>
            <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
            </button>
        </div>
        <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">
                <li class="nav-item">
                    <a href="{{route('dashboard.user.index')}}">
                        <i class="fas fa-file"></i>
                        <p>User</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('dashboard.doctor.index')}}">
                        <i class="fas fa-file"></i>
                        <p>Doctor</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('dashboard.patient.index')}}">
                        <i class="fas fa-file"></i>
                        <p>Patient</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('dashboard.country.index')}}">
                        <i class="fas fa-file"></i>
                        <p>Country</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('dashboard.city.index')}}">
                        <i class="fas fa-file"></i>
                        <p>City</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('dashboard.department.index')}}">
                        <i class="fas fa-file"></i>
                        <p>Department</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('dashboard.blog.index')}}">
                        <i class="fas fa-file"></i>
                        <p>Blog</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>