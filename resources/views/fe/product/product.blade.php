@extends('fe.layout')
@section('content')
<div style="margin-top: 84px;"></div>
<!-- BANNER -->
<img src="{{ asset('/interface/images/slider-p.jpg')}}" alt="" srcset="">
<!-- BANNER -->
<!-- BEST COFFEE SELLERS -->
<section id="menu" class="coffee_menu bg_cover pt-50 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_title pb-30">
                    <h4 class="title">Cà phê đóng gói</h4>
                    <span class="line w-100"></span>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($newProducts as $product)
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
</section>

<!-- BEST COFFEE SELLERS -->
<section id="menu" class="coffee_menu bg_cover pt-50 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_title pb-30">
                    <h4 class="title">Cà phê chế phin</h4>
                    <span class="line w-100"></span>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($newProducts as $product)
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
</section>

<!-- BEST COFFEE SELLERS -->
<section id="menu" class="coffee_menu bg_cover pt-50 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_title pb-30">
                    <h4 class="title">Gợi ý quà tặng</h4>
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
</section>

@endsection