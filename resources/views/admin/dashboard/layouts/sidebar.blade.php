<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion pr-0" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">کلینیک پردیس</div>
    </a>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="index.html">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span> داشبورد </span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading">
        کاربران
    </div>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" 
            data-target="#users" aria-expanded="true"
            aria-controls="users">
            <i class="fas fa-fw fa-user"></i>
            <span> کاربران </span>
        </a>
        <div id="users" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <!-- <h6 class="collapse-header"> کامپونت سفارشی : </h6> -->
                <a class="collapse-item" href="{{ route('admin.users.list') }}">لیست کاربران</a>
                <!-- <a class="collapse-item" href="#">Cards</a> -->
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" 
            data-target="#patients" aria-expanded="true"
            aria-controls="patients">
            <i class="fas fa-fw fa-user"></i>
            <span> بیماران </span>
        </a>
        <div id="patients" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <!-- <h6 class="collapse-header"> کامپونت سفارشی : </h6> -->
                <a class="collapse-item" href="{{ route('admin.patients.list') }}">لیست بیماران</a>
                <!-- <a class="collapse-item" href="#">Cards</a> -->
            </div>
        </div>
    </li>
</ul>