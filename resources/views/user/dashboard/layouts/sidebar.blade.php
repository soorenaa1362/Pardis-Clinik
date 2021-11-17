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
            data-target="#profile" aria-expanded="true"
            aria-controls="profile">
            <i class="fas fa-save fa-2x"></i>
            <span> پروفایل </span>
        </a>
        <div id="profile" class="collapse" aria-labelledby="heading1" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header"> پروفایل : </h6>
                <a class="collapse-item" href="{{ route('user.create.profile') }}">
                    ثبت 
                </a>
            </div>
        </div>
    </li> 
    
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" 
            data-target="#users" aria-expanded="true"
            aria-controls="users">
            <i class="fas fa-fw fa-user"></i>
            <span> بیماران </span>
        </a>
        <div id="users" class="collapse" aria-labelledby="heading1" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header"> بیمار : </h6>
                <a class="collapse-item" href="{{ route('user.patient.form') }}">
                    ثبت  بیمار
                </a>
                <a class="collapse-item" href="{{ route('user.patient.list') }}">
                    لیست بیماران
                </a>
            </div>
        </div>
    </li> 

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" 
            data-target="#bioSign" aria-expanded="true"
            aria-controls="bioSign">
            <i class="fas fa-stethoscope fa-2x"></i>
            <span> شرح حال و علائم </span>
        </a>
        <div id="bioSign" class="collapse" aria-labelledby="heading2" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header"> شرح حال و علائم : </h6>
                <a class="collapse-item" href="{{ route('user.create.bioSign') }}">
                    ثبت
                </a>
            </div>
        </div>
    </li> 
</ul>


