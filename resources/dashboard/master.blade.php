<!DOCTYPE html>
<html lang="en">
<head>
    @include('dashboard.layouts.head')
</head>
<body>
    @include('dashboard.layouts.sidebar')
<div class="content">
    @include('dashboard.layouts.header')
    @include('dashboard.layouts.breadcrumb')
    <div class="main-content">
        @yield('content')
    </div>
</div>
</body>
@include('dashboard.layouts.foot')
</html>