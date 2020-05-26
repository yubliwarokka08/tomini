<!-- Top Bar Start -->
<div class="topbar">

    <div class="topbar-inner">
        <!-- LOGO -->
        <div class="topbar-left text-center text-lg-left">
            <a href="{{ route('dashboard') }}" class="logo">
                <span>
                    <img src="{{ url('/backend/assets/images/logo-sm.png') }}" alt="logo-small" class="logo-sm">
                </span>
                <span>
                    <img src="{{ url('/backend/assets/images/logo.png') }}" alt="logo-large" class="logo-lg logo-light">
                    <img src="{{ url('/backend/assets/images/logo-dark.png') }}" alt="logo-large" class="logo-lg">
                </span>
            </a>
        </div>
        <!--end logo-->
        <!-- Navbar -->
        <nav class="navbar-custom">    
            <ul class="list-unstyled topbar-nav float-right mb-0">
                <li class="dropdown">
                    <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="false" aria-expanded="false">
                        <img src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}" alt="profile-user" class="rounded-circle" /> 
                        <span class="ml-1 nav-user-name hidden-sm">{{ Auth::user()->name }}<i class="mdi mdi-chevron-down"></i> </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#"><i class="ti-user text-muted mr-2"></i> Profile</a>
                        <a class="dropdown-item" href="#"><i class="ti-settings text-muted mr-2"></i> Settings</a>
                        <div class="dropdown-divider mb-0"></div>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal"><i class="ti-power-off text-muted mr-2"></i> Logout</a>
                    </div>
                </li>
                <li class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle nav-link" id="mobileToggle">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a><!-- End mobile menu toggle-->
                </li> <!--end menu item-->   
            </ul><!--end topbar-nav-->
        </nav>
        <!-- end navbar--> 
    </div><!--topbar-inner-->

    <div class="navbar-custom-menu">
        <div class="container-fluid">
            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">
                    <li class="has-submenu">
                        <a href="{{ route('dashboard') }}">
                            <i class="dripicons-graph-bar"></i>
                            <span>Dashboard</span>
                        </a>
                    </li><!--end has-submenu-->

                    <li class="has-submenu">
                        <a href="{{ route('travel-package.index') }}">
                            <i class="fas fa-hotel"></i>
                            <span>Paket Travel</span>
                        </a>
                    </li><!--end has-submenu-->                            
                    
                    <li class="has-submenu">
                        <a href="{{ route('gallery.index') }}">
                            <i class="fas fa-image"></i>
                            <span>Galeri Travel</span>
                        </a>
                    </li><!--end has-submenu-->

                    <li class="has-submenu">
                        <a href="{{ route('transaction.index') }}">
                            <i class="fas fa-dollar-sign"></i>
                            <span>Transaksi</span>
                        </a>
                    </li><!--end has-submenu-->
                </ul><!-- End navigation menu -->
            </div> <!-- end navigation -->
        </div> <!-- end container-fluid -->
    </div> <!-- end navbar-custom -->           
</div>
<!-- Top Bar End -->