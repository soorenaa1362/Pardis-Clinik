<!DOCTYPE html>
<html lang="en">
    <head>
        @include('user.dashboard.layouts.head')
    </head>
    <body id="page-top">
        <!-- Page Wrapper -->
        <div id="wrapper">
            <!-- Sidebar -->
            @include('user.dashboard.layouts.sidebar')
            <!-- End of Sidebar -->
            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
                @include('user.dashboard.layouts.header')
                <!-- Main Content -->
                <div id="content">
                    @yield('content')
                </div>
                <!-- End of Main Content -->
                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; WebProg.ir 1399</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->
            </div>
            <!-- End of Content Wrapper -->
        </div>
        <!-- End of Page Wrapper -->
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
        </a>
        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"> خروج از پنل </h5>
                        <button class="close ml-0" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body"> 
                        آیا میخواهید از پنل خارج شوید ؟
                    </div>
                    <div class="modal-footer">
                        <a class="btn btn-primary" href="{{ route('auth.logout') }}"> خروج </a>
                        <button class="btn btn-secondary" type="button" data-dismiss="modal"> لغو </button>
                    </div>
                </div>
            </div>
        </div>
        @include('user.dashboard.layouts.footer')
    </body>
</html>