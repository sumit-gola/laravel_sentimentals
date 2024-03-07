<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box" style="background: #ffffff">
        <!-- Dark Logo-->
        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
                <img src="assets/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="assets/images/logo-dark.png" alt="" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index.html" class="logo logo-light ">
            <span class="logo-sm">
                <img height="20" src="{{ asset('assets/images/brands/logo/TCS-Sentiments-logo-Pink_c612ca56-9d39-468a-8502-275d4d99643c_150x.webp') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img height="60" src="{{ asset('assets/images/brands/logo/TCS-Sentiments-logo-Pink_c612ca56-9d39-468a-8502-275d4d99643c_150x.webp') }}" alt="" height="17">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div class="dropdown sidebar-user m-1 rounded">
        <button type="button" class="btn material-shadow-none" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="d-flex align-items-center gap-2">
                <img class="rounded header-profile-user" src="assets/images/users/avatar-1.jpg" alt="Header Avatar">
                <span class="text-start">
                    <span class="d-block fw-medium sidebar-user-name-text">Anna Adame</span>
                    <span class="d-block fs-14 sidebar-user-name-sub-text"><i class="ri ri-circle-fill fs-10 text-success align-baseline"></i> <span class="align-middle">Online</span></span>
                </span>
            </span>
        </button>
        <div class="dropdown-menu dropdown-menu-end">
            <!-- item-->
            <h6 class="dropdown-header">Welcome Anna!</h6>
            <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Profile</span></a>           
            <a class="dropdown-item" href="auth-logout-basic.html"><i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Logout</span></a>
        </div>
    </div>
    <div id="scrollbar">
        <div class="container-fluid">


            <div id="two-column-menu">
            </div>
        <ul class="navbar-nav" id="navbar-nav">
            <li class="menu-title"><span data-key="t-menu">Menu</span></li>
            <li class="nav-item">
                <a class="nav-link menu-link" href="#sidebarDashboards" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                    <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Ecommerce</span>
                </a>
                <div class="collapse menu-dropdown" id="sidebarDashboards">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            <a href="{{ route('admin.categories') }}" class="nav-link" data-key="t-analytics"> Categories </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.products') }}" class="nav-link" data-key="t-analytics"> Add Product </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('all.products') }}" class="nav-link" data-key="t-analytics"> All Product </a>
                        </li>
                        {{-- <li class="nav-item">
                            <a href="{{ route('add.products') }}" class="nav-link" data-key="t-analytics"> Add Product </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('products.all') }}" class="nav-link" data-key="t-analytics"> All Product </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('page.menu') }}" class="nav-link" data-key="t-analytics"> Menu </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('page.sub_menu') }}" class="nav-link" data-key="t-crm"> Sub-menu </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('webpage.new_page') }}" class="nav-link" data-key="t-ecommerce"> Add Pages </a>
                        </li> --}}
                       
                    </ul>
                </div>
            </li> <!-- end Dashboard Menu -->
        </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>