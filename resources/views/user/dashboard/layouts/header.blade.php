<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle">
    <i class="fa fa-bars" style="margin-top: 4px;"></i>
    </button>
    <!-- Topbar Navbar -->
    <ul class="navbar-nav mr-auto">        
        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
            <span class="ml-2 d-none d-lg-inline text-gray-600 small"> {{ $authUser->username }} </span>
            <img class="img-profile rounded-circle" src="{{ asset('assets./img/user.jpg') }}">
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in text-right"
                aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                <i class="fas fa-user fa-sm fa-fw ml-2 text-gray-400"></i>
                    پروفایل
                </a>
                <a class="dropdown-item" href="#">
                <i class="fas fa-cogs fa-sm fa-fw ml-2 text-gray-400"></i>
                    تنظیمات
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('auth.logout') }}" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt fa-sm fa-fw ml-2 text-gray-400"></i>
                    خروج
                </a>
            </div>
        </li>
    </ul>
</nav>
<!-- End of Topbar -->