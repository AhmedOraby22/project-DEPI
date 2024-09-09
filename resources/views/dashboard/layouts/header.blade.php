<div class="main-header">
    <div class="main-header-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">

            <div class="nav-toggle">

            </div>

        </div>
        <!-- End Logo Header -->
    </div>
    <!-- Navbar Header -->
    <nav
            class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom"
    >
        <div class="container-fluid">

            <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">


                <li class="nav-item topbar-user dropdown hidden-caret">
                    <a
                            class="dropdown-toggle profile-pic"
                            data-bs-toggle="dropdown"
                            href="#"
                            aria-expanded="false"
                    >
                        <div class="avatar-sm">
                            <img
                                    src="assets/img/profile.jpg"
                                    alt="..."
                                    class="avatar-img rounded-circle"
                            />
                        </div>
                        <span class="profile-username">
                      <span class="op-7">Hi,</span>
                      @if(isset($admin))
    <h4>{{$admin->username}}</h4>
  
@else
    <p>User not logged in</p>
@endif
                    </span>
                    </a>
                    <ul class="dropdown-menu dropdown-user animated fadeIn">
                        <div class="dropdown-user-scroll scrollbar-outer">
                            <li>
                                <div class="user-box">
                                    
                                    <div class="u-text">
                                    @if(isset($admin))
    <h4>{{$admin->username}}</h4>
    <p class="text-muted">{{$admin->email}}</p>
@else
    <p>User not logged in</p>
@endif
                                        <a href="{{ url('/admin/profile') }}" class="btn btn-xs btn-secondary btn-sm">View Profile</a>

                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ url('/admin/profile') }}" >My Profile</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ url('/admin/logout') }}">Logout</a>
                            </li>
                        </div>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <!-- End Navbar -->
</div>