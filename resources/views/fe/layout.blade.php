<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{ asset('/interface/images/logo.png')}}" type="image/x-icon">

    <title>Coffee Admin</title>
    <!-- Custom fonts for this template-->
    <link href="{{asset('/interface/vendor/all.min.css')}}" rel="stylesheet" type="text/css">
    <!--====== Animate CSS ======-->
    <link href="{{asset('/interface/css/animate.css')}}" rel="stylesheet" type="text/css">

    <!--====== Slick CSS ======-->
    <link href="{{asset('/interface/css/slick.css')}}" rel="stylesheet" type="text/css">

    <!--====== Line Icons CSS ======-->
    <link href="{{asset('/interface/css/LineIcons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">


    <!--====== Bootstrap CSS ======-->
    <!-- <link href="{{asset('/interface/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"> -->
    <link href="{{asset('/admin/scss/sb-admin-2.css')}}" rel="stylesheet">


    <!--====== Default CSS ======-->
    <link href="{{asset('/interface/css/default.css')}}" rel="stylesheet" type="text/css">

    <!--====== Style CSS ======-->
    <link href="{{asset('/interface/css/style.css')}}" rel="stylesheet" type="text/css">

    <!-- <link href="{{asset('/interface/css/ftco.css')}}" rel="stylesheet" type="text/css"> -->

</head>

<body id="page-top" style="background: #F5F1ED;">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column bg-white">
            <!--====== HEADER PART START ======-->

            <section class="header_area">
                <div class="header_navbar">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <nav class="navbar navbar-expand-lg">
                                    <a class="sidebar-brand d-flex align-items-center justify-content-center my-" href="{{route('users.home')}}">
                                        <img height="40px" src="{{ asset('/interface/images/logo.png')}}" alt="logo" srcset="">
                                        <h6 class="font-weight-bold">WinterCoffee</h6>
                                    </a>
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="toggler-icon"></span>
                                        <span class="toggler-icon"></span>
                                        <span class="toggler-icon"></span>
                                    </button>

                                    <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                        <ul class="navbar-nav mr-auto">
                                            <li class="nav-item @if(Route::currentRouteName() == 'users.home') active @endif">
                                                <a class="" href="{{route('users.home')}}">Trang chủ</a>
                                            </li>
                                            <li class="nav-item @if(Route::currentRouteName() == 'users.product') active @endif">
                                                <a class="" href="{{route('users.product')}}">Sản phẩm của chúng tôi</a>
                                            </li>
                                            <li class="nav-item @if(Route::currentRouteName() == 'users.blog') active @endif">
                                                <a class="" href="{{route('users.blog')}}">Blog cà phê</a>
                                            </li>
                                            <li class="nav-item @if(Route::currentRouteName() == 'users.about') active @endif">
                                                <a class="" href="{{route('users.about')}}">Về chúng tôi</a>
                                            </li>
                                            <li class="nav-item @if(Route::currentRouteName() == 'users.contact') active @endif">
                                                <a class="" href="{{route('users.contact')}}">Liên hệ</a>
                                            </li>
                                            <!-- Nav Item - Messages -->
                                            <li class="nav-item dropdown no-arrow" id="carts">
                                                <a class="nav-link dropdown-toggle" id="bag-carts" href="{{route('shop-cart')}}">
                                                    <i class="fas fa-shopping-cart"></i>
                                                    <!-- Counter - Messages -->
                                                    <sup class="bg-primary p-1 rounded-circle">@if(session('CART'))
                                                        {{count(session('CART'))}}
                                                        @else
                                                        0
                                                        @endif
                                                    </sup>
                                                </a>
                                            </li>
                                            <li class="nav-item @if(Route::currentRouteName() == 'order') active @endif">
                                                <a class="px-3" href="{{route('signin')}}">
                                                    <i class="fas fa-user"></i>
                                                    @if(\Illuminate\Support\Facades\Auth::check())
                                                    <p>{{\Illuminate\Support\Facades\Auth::user()->name}}</p>
                                                    <a href="{{route('logout-user')}}" onclick="return confirm ('bạn có thật sự muốn đăng xuất?');">Đăng xuất</a>
                                                    @endif
                                                </a>
                                            </li>
                                        </ul>
                                    </div> <!-- navbar collapse -->
                                </nav> <!-- navbar -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->
                </div> <!-- header navbar -->

            </section>
            <div class="notiProduct" style="display: none;">
                Thêm vào giỏ hàng thành công!
            </div>


            <!--====== HEADER PART ENDS ======-->

            <!-- Main Content -->
            <div id="content">
                <div class="">
                    @yield('content')
                </div>

            </div>
            <!-- End of Main Content -->



            <!-- Footer -->
            <!--====== FOOTER PART START ======-->

            <section id="footer" class="footer_area">

                <div class="footer_widget pt-80 pb-130">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 order-md-1 order-lg-1">
                                <div class="footer_about mt-45">
                                    <h4 class="footer_title">Winter Coffee</h4>
                                    <p>Theo dõi Fan-page và kênh YouTube chính thức của chúng tôi để cập nhật các thông tin mới nhất</p>
                                    <ul class="social">
                                        <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                                        <li><a href="#"><i class="lni lni-twitter-original"></i></a></li>
                                        <li><a href="#"><i class="lni lni-instagram-original"></i></a></li>
                                        <li><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
                                    </ul>
                                </div> <!-- footer about -->
                            </div>
                            <div class="col-lg-4 order-md-3 order-lg-2">
                                <div class="footer_link_wrapper d-flex flex-wrap">
                                    <div class="footer_link mt-45">
                                        <h4 class="footer_title">Thời gian làm việc</h4>
                                        <ul>
                                            <li>Thứ hai-Thứ sáu: 08.00 A.M - 10.00 P.M</li>
                                            <li>Thứ bảy: 08.00 A.M - 02.00 P.M</li>
                                            <li>Chủ nhật: Đóng cửa</li>
                                            <li>Ngày lễ: 08.00 A.M - 02.00 P.M</li>
                                        </ul>
                                    </div> <!-- footer link -->
                                </div> <!-- footer link wrapper -->
                            </div>
                            <div class="col-lg-4 col-md-4 order-md-2 order-lg-3">
                                <div class="footer_instagram mt-45">
                                    <h4 class="footer_title">Bảng tin Instagram</h4>
                                    <div class="instagram_image">
                                        <a href="#"><img src="{{asset('/interface/images/instagram-1.jpg')}}" alt="instagram"></a>
                                        <a href="#"><img src="{{asset('/interface/images/instagram-2.jpg')}}" alt="instagram"></a>
                                        <a href="#"><img src="{{asset('/interface/images/instagram-3.jpg')}}" alt="instagram"></a>
                                        <a href="#"><img src="{{asset('/interface/images/instagram-4.jpg')}}" alt="instagram"></a>
                                        <a href="#"><img src="{{asset('/interface/images/instagram-4.jpg')}}" alt="instagram"></a>
                                        <a href="#"><img src="{{asset('/interface/images/instagram-3.jpg')}}" alt="instagram"></a>
                                        <a href="#"><img src="{{asset('/interface/images/instagram-2.jpg')}}" alt="instagram"></a>
                                        <a href="#"><img src="{{asset('/interface/images/instagram-1.jpg')}}" alt="instagram"></a>
                                    </div>
                                </div> <!-- footer instagram -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- contact form -->
                </div> <!-- footer Widget -->

                <div class="footer_copyright">
                    <div class="container">
                        <div class="copyright text-center">
                            <p>Copyright by <a href="{{route('admin.dashboard')}}" rel="nofollow">WinterCoffee</a></p>
                        </div> <!-- copyright -->
                    </div> <!-- contact form -->
                </div> <!-- footer copyright -->

                <div class="footer_shape">
                    <img src="{{asset('/interface/images/footer_shape.png')}}" alt="footer shape">
                </div> <!-- footer shape -->


            </section>

            <!--====== FOOTER PART ENDS ======-->
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->
        <!--====== BACK TOP TOP PART START ======-->

        <a href="#" class="back-to-top"><i class="lni lni-chevron-up"></i></a>

        <!--====== BACK TOP TOP PART ENDS ======-->

    </div>
    <!-- End of Page Wrapper -->
    <!--====== Jquery js ======-->
    <script src="{{asset('/interface/js/vendor/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('/interface/js/vendor/modernizr-3.7.1.min.js')}}"></script>

    <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="{{asset('/interface/js/popper.min.js')}}"></script>
    <script src="{{asset('/interface/js/bootstrap.min.js')}}"></script>

    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!--====== Slick js ======-->
    <script src="{{asset('/interface/js/slick.min.js')}}"></script>

    <script src="assets/js/slick.min.js"></script>


    <!--====== Scrolling Nav js ======-->
    <script src="{{asset('/interface/jquery.easing.min.js')}}"></script>
    <script src="{{asset('/interface/js/scrolling-nav.js')}}"></script>

    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/scrolling-nav.js"></script>

    <!--====== WOW js ======-->
    <script src="{{asset('/interface/js/wow.min.js')}}"></script>

    <script src="assets/js/wow.min.js"></script>

    <!--====== Main js ======-->
    <script src="{{asset('/interface/js/main.js')}}"></script>

    <script src="assets/js/main.js"></script>
    <script>
        $(document).on('click', '.cart-btn', function(e) {
            var id = $(this).attr('id');
            $.ajax({
                url: "{{ route('api.cart.add') }}",
                method: "post",
                data: {
                    id: id,
                },
                success: function(response) {
                    $("#carts").load(' #bag-carts');
                    $('.notiProduct').slideDown('fast');
                    $('.notiProduct').delay(2000).slideUp('fast');
                },
            });
        });
    </script>
    <script>
        $(document).on('click', '.del-cart', function() {
            var id = $(this).attr('id');
            $.ajax({
                url: "{{ route('api.cart.delete') }}",
                method: "get",
                data: {
                    id: id,
                },
                success: function(response) {
                    $("#carts").load(' #bag-carts');
                    $("#cart").load(' #data-cart');
                    $("#carts").load(' #bag-carts');
                    $("#total").load(' #total-price');
                },
            });
        });
    </script>

</body>

</html>