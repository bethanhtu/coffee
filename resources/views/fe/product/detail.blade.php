@extends('fe.layout')
@section('content')
<div style="margin-top: 84px;"></div>
<!-- Product section-->
<section class="">
    <div class="container px-4 px-lg-5 my-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-md-6"><img class="mb-5 mb-md-0" src="https://trungnguyenecoffee.com/wp-content/uploads/2021/07/HinhRetail-16-800x800.jpg" alt="..." /></div>
            <div class="col-md-6">
                <h1 class="display-5 fw-bolder">Tên sản phẩm</h1>
                <div class="fs-5 mb-3">
                    <span class="text-decoration-line-through">$45.00</span>
                    <span>$40.00</span>
                </div>
                <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium at dolorem quidem modi. Nam sequi consequatur obcaecati excepturi alias magni, accusamus eius blanditiis delectus ipsam minima ea iste laborum vero?</p>
                <div class="d-flex mt-5">
                    <input class="form-control text-center px-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" />
                    <button class="btn btn-outline-primary btn-sm mx-2">Thêm vào giỏ hàng</button>
                    <button class="btn btn-outline-primary btn-sm">Đặt hàng ngay</button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Related items section-->
<section class="py-5 bg-light">
    <div class="container px-4 px-lg-5">
        <div class="row">
            <div class="col-12">
                <div class="section_title pb-30">
                    <h6 class="title">Sản phẩm liên quan</h6>
                    <span class="line w-100"></span>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($products as $product)
            <div class="col-md-3 col-6 py-4">
                <div class="coffee_menu_wrapper d-flex align-items-center border overflow-hidden rounded h-100">
                    <div class="single_coffee_menu wow fadeInUp h-100 p-1" data-wow-duration="1.3s" data-wow-delay="0.2s">
                        <div class="coffee_menu_image">
                            <img class="rounded" style="" width="100%" height="100%" src="{{$product->main_image}}" alt="coffee">
                        </div>
                        <div class="py-3 d-flex flex-column align-items-center justify-content-between text-center flex-grow-1 mt-auto">
                            <h6 style="line-height: 1.5; min-height: 3em; /* Limit to 2 lines */ overflow: hidden;">{{$product->name}}</h6>
                            <p class="text-black my-2">{{number_format($product->price, 0) }} đ</p>
                            <button class="btn btn-outline-primary btn-sm">Đặt hàng ngay</button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection