@extends('fe.layout')
@section('content')
<style>
    .single_slider {
        height: 400px;
    }
</style>
<div id="home" class="">
    <div class="single_slider bg_cover d-flex align-items-center" style="background-image: url({{ asset('/interface/images/slider-p.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="slider_content text-center">
                        <!-- <h2 class="slider_title text-primary">WinterCoffee</h2> -->
                        <!-- <p class="wow fadeInUp">Hành trình từ hạt đến ly cà phê </p> -->
                        <!-- <a href="#about" class="btn btn-outline-primary mt-3">Learn More</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BEST COFFEE SELLERS -->
<section id="menu" class="coffee_menu bg_cover pt-50 pb-50">
    <div class="container">
        <div class="row">
            @foreach($categories as $category)
            <div class="col-md-12">
                <div class="section_title pb-30">
                    <h4 class="title">{{ $category->name }}</h4>
                    <span class="line w-100"></span>
                </div>
                <div class="row">
                    @foreach($products->where('category_id', $category->id) as $product)
                    <div class="col-md-3 col-6 py-4">
                        <div class="coffee_menu_wrapper d-flex align-items-center border overflow-hidden rounded h-100">
                            <div class="single_coffee_menu wow fadeInUp h-100 p-1" data-wow-duration="1.3s" data-wow-delay="0.2s">
                                <a class="coffee_menu_image" href="{{route('users.detail',['id'=>$product->id])}}">
                                    <img class="rounded" style="" width="100%" height="100%" src="{{$product->main_image}}" alt="coffee">
                                </a>
                                <div class="py-3 d-flex flex-column align-items-center justify-content-between text-center flex-grow-1 mt-auto">
                                    <h5 class="text-dark" style="line-height: 1.5; min-height: 3em; /* Limit to 2 lines */ overflow: hidden;">{{$product->name}}</h5>
                                    <p class="text-black my-2">{{number_format($product->price, 0) }} đ</p>
                                    <a class="btn btn-outline-primary btn-sm cart-btn" href="#order" id="{{$product->id}}">Đặt hàng ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection