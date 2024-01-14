<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{ asset('/interface/images/logo.png')}}" type="image/x-icon">

    <title>Đăng ký</title>
    <!-- Custom fonts for this template-->
    <link href="{{asset('/admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="{{asset('/admin/scss/sb-admin-2.css')}}" rel="stylesheet">

</head>

<div class="">
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-flex ">
                                <img width="100%" src="{{ asset('/interface/images/login-2.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="d-flex align-items-center justify-content-center my-4">
                                        <img height="40px" src="{{ asset('/interface/images/logo.png')}}" alt="logo" srcset="">
                                        <h4 class="text-primary font-weight-bold">Đăng ký</h4>
                                    </div>
                                    <form class="user" action="{{route('register')}}" method="post" role="form" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="name" name="name" value="" onblur="checkname()" placeholder="Tên" minlength="10" Required />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="email" name="email" value="" onblur="checkEmail();" placeholder="Email" Required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="password" name="password" value="" onblur="checkPass();" placeholder="Mật khẩu" minlength="5" Required>
                                        </div>
                                        <div class="form-group">
                                            <input type="number" class="form-control form-control-user" id="phone" name="phone" value="" onblur="checkPhone();" placeholder="Số điện thoại" Required>
                                        </div>
                                        <button class="btn btn-primary btn-user btn-block" type="submit">Đăng ký</button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Quên mật khẩu ?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="{{route('signin')}}">Đăng nhập !</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <!-- Begin Page Content -->
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

    </div>

</div>
<!-- Custom scripts for all pages-->
<script src="{{asset('/admin/js/sb-admin-2.min.js')}}"></script>


</body>

</html>