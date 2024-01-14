<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{ asset('/web/images/logo.png')}}" type="image/x-icon">

    <title>Coffee Admin</title>
    <!-- Custom fonts for this template-->
    <link href="{{asset('/admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('/admin/scss/sb-admin-2.css')}}" rel="stylesheet">
    <link href="{{asset('/admin/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    <!-- Animation -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!-- CKeditor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-white sidebar sidebar-white accordion toggled font-weight-bold" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center my-" href="{{route('users.home')}}">
                <div class="sidebar-brand-icon">
                    <img height="40px" src="{{ asset('/interface/images/logo.png')}}" alt="logo" srcset="">
                </div>
                <div class="sidebar-brand-text mx-1">
                    <h6 class="font-weight-bold">Admin</h6>
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.dashboard')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Thống kê</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Quản trị viên
            </div>
            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.user.list')}}">
                    <i class="fas fa-sm fa-users"></i>
                    <span>Tài khoản</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.product.list')}}">
                    <i class="fas fa-coffee fa-sm"></i>
                    <span>Sản phẩm</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.category.list')}}">
                    <i class="fas fa-layer-group fa-sm"></i>
                    <span>Danh mục</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.blog.list')}}">
                    <i class="fas fa-newspaper fa-sm"></i>
                    <span>Bài viết</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.orders.list')}}">
                    <i class="fas fa-file-alt fa-sm"></i>
                    <span>Đơn hàng</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Pages Collapse Menu -->
            <!-- <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Bảng</span></a>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="py-2 bg-white collapse-inner rounded">
                        <h6 class="collapse-header">Quản trị viên:</h6>
                        <a class="collapse-item" href="{{route('admin.user.list')}}"><i class="fas fa-user fa-sm fa-fw mr-2"></i>Admin</a>
                        <a class="collapse-item" href="{{route('admin.product.list')}}"><i class="fas fa-coffee fa-sm fa-fw mr-2"></i>Sản phẩm</a>
                        <a class="collapse-item" href="{{route('admin.category.list')}}"><i class="fas fa-layer-group fa-sm fa-fw mr-2"></i>Danh mục</a>
                    </div>
                </div>
            </li>
            <hr class="sidebar-divider"> -->
            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.charts')}}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Biểu đồ</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column bg-white">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <!-- <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                        <ul id="nav" class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="" href="{{route('users.home')}}">Trang chủ</a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="" href="{{route('users.product')}}">Sản phẩm</a>
                            </li>
                            <li class="nav-item">
                                <a class="" href="{{route('users.blog')}}">Blog</a>
                            </li>
                        </ul>
                    </div> navbar collapse -->

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        @php
                        $orders = \App\Models\Orders::where('status', 1)->take(5)->get();
                        $orderCount = count($orders);
                        @endphp
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">{{ $orderCount }}</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Đơn hàng mới
                                </h6>

                                @if ($orders->count() > 0)
                                @foreach (\App\Models\Orders::where('status', 1)->take(5)->get() as $order)
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">Ngày đặt: {{ $order->created_at }}</div>
                                        <span class="font-weight-bold">Khách hàng: {{ $order->user->name }}</span>
                                    </div>
                                </a>
                                @endforeach
                                @else
                                <a class="dropdown-item" href="#">
                                    <div>
                                        <span class="font-weight-bold">Không có đơn hàng mới.</span>
                                    </div>
                                </a>
                                @endif
                                <a class="dropdown-item text-center small text-gray-500" href="{{route('admin.orders.list')}}">Xử lí đơn hàng</a>
                            </div>
                        </li>
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ \Illuminate\Support\Facades\Auth::user()->name }}</span>
                                <img class="img-profile rounded-circle" src="{{ asset('/interface/images/logo.png')}}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Tài khoản
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cog fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Cài đặt
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-question fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Hỗ trợ
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{route('admin.logout')}}" data-toggle="" data-target="#">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Đăng xuất
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->


                <!-- Alert -->
                @if(\Illuminate\Support\Facades\Session::has('success'))
                <div style="margin-top: 70px;" class="alert alert-success position-fixed fixed-top w-25 ml-auto animate__animated animate__slideInRight" role="alert" id="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h5 class="alert-heading font-weight-bold">Well done !</i></h5>
                    <p class="mb-0">{{\Illuminate\Support\Facades\Session::get('success')}}</p>
                </div>
                @endif
                @if(\Illuminate\Support\Facades\Session::has('error'))
                <div class="alert alert-danger position-fixed fixed-bottom w-50 mt-5 ml-auto animate__animated animate__slideInRight" role="alert" id="">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h5 class="alert-heading font-weight-bold">Xảy ra lỗi !</h5>
                    <p class="mb-0 text-sm">{{\Illuminate\Support\Facades\Session::get('error')}}</p>
                </div>
                @endif

                <!-- container-fluid -->
                <div class="container-fluid border-left pt-4">
                    @yield('content')
                </div>

                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Fizz Coffee Website 2023</span>
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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Bạn có muốn đăng xuất tài khoản ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Chọn "Đăng xuất" bên dưới nếu bạn sẵn sàng kết thúc phiên hiện tại của mình.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="{{route('admin.logout')}}">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('/admin/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('/admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('/admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('/admin/js/sb-admin-2.min.js')}}"></script>
    <script src="{{asset('/admin/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('/admin/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('/admin/js/demo/datatables-demo.js')}}"></script>

    <script src="{{asset('/admin/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('/admin/js/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('/admin/js/demo/chart-pie-demo.js')}}"></script>
    <script src="{{asset('/admin/js/demo/chart-bar-demo.js')}}"></script>


    <!-- Jquery cdn -->

    <!--  -->
    <script src="{{asset('/admin/js/myjs.js')}}"></script>


</body>

</html>