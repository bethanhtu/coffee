@extends('fe.layout')
@section('content')
<!-- BANNER -->
<div id="home" class="header_slider slider-active">
    <div class="single_slider bg_cover d-flex align-items-center" style="background-image: url({{ asset('/interface/images/slider-1.jpg')}})">
        <!-- <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="slider_content">
                        <h2 class="slider_title">Experience Authentic Coffees</h2>
                        <p class="wow fadeInUp">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, </p>
                        <a href="#about" class="btn btn-outline-primary mt-3">Learn More</a>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
    <div class="single_slider bg_cover d-flex align-items-center" style="background-image: url({{ asset('/interface/images/slider-2.jpg')}})">
        <!-- <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="slider_content">
                        <h2 class="slider_title">Check Out Our Signature Menu</h2>
                        <p class="wow fadeInUp">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, </p>
                        <a href="#menu" class="btn btn-outline-primary mt-3">View Menu</a>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
    <div class="single_slider bg_cover d-flex align-items-center" style="background-image: url({{ asset('/interface/images/slider-3.jpg')}})">
        <!-- <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="slider_content">
                        <h2 class="slider_title wow fadeInUp">Serving Since 1980</h2>
                        <p class="wow fadeInUp">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, </p>
                        <a href="#contact" class="btn btn-outline-primary mt-3">Contact Us</a>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
</div>
<!-- BANNER -->

<!--====== COFFEE PART START ======-->

<section id="coffee" class="coffee_area pt-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_title text-center pb-30">
                    <h4 class="title">Hạt cà phê Việt</h4>
                    <span class="line"></span>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-7 col-sm-9">
                <div class="single_coffee text-center mt-30 wow fadeInUpBig" data-wow-duration="1.3s" data-wow-delay="0.2s">
                    <div class="">
                        <img width="100px" height="100px" src="{{ asset('/interface/images/coffee-5.jpg')}}" alt="coffee">

                    </div>
                    <div class="coffee_content">
                        <h4 class="coffee_title">Arabica</h4>
                        <p>Hạt Arabica thượng hạng với hương thơm tinh tế từ Lâm Đồng</p>
                    </div>
                </div> <!-- single coffee -->
            </div>
            <div class="col-lg-4 col-md-7 col-sm-9">
                <div class="single_coffee text-center mt-30 wow fadeInUpBig" data-wow-duration="1.3s" data-wow-delay="0.5s">
                    <div class="">
                        <img width="100px" height="100px" src="{{ asset('/interface/images/coffee-6.jpg')}}" alt="coffee">
                    </div>
                    <div class="coffee_content">
                        <h4 class="coffee_title">Robusta </h4>
                        <p>Hạt Robusta đậm đà vị truyền thống từ Tây Nguyên.</p>
                    </div>
                </div> <!-- single coffee -->
            </div>
            <div class="col-lg-4 col-md-7 col-sm-9">
                <div class="single_coffee text-center mt-30 wow fadeInUpBig" data-wow-duration="1.3s" data-wow-delay="0.8s">
                    <div class="">
                        <img width="100px" height="100px" src="{{ asset('/interface/images/coffee-7.jpg')}}" alt="coffee">

                    </div>
                    <div class="coffee_content">
                        <h4 class="coffee_title">Culi</h4>
                        <p>Sự pha trộn giữa 2 loại hạt cà phê vàng đất Việt Robusta, Arabica.</p>
                    </div>
                </div> <!-- single coffee -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== COFFEE PART ENDS ======-->

<!--====== ABOUT PART START ======-->

<section id="about" class="about_area pt-120 pb-130">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_title text-center pb-10">
                    <h4 class="title">Sứ mệnh thương hiệu</h4>
                    <span class="line"></span>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about_image mt-50 wow fadeInRightBig" data-wow-duration="1.3s" data-wow-delay="0.5s">
                    <img src="{{ asset('/interface/images/about-1.jpg')}}" alt="about">
                </div> <!-- about image -->
            </div>
            <div class="col-lg-6">
                <div class="about_content mt-45 wow fadeInLeftBig" data-wow-duration="1.3s" data-wow-delay="0.5s">
                    <h4 class="about_title">Winter Coffee</h4>
                    <p>Thế giới cà phê có vẻ phức tạp, nhưng không khó để nắm bắt những điều cơ bản.
                        Một khi đã hiểu về cà phê, bạn sẽ càng say mê và tận hưởng từng khoảnh khắc.
                        <br> <br> Đa dạng cho mọi khẩu vị và cho mọi khoảnh khắc trong ngày. Sau một ngày làm việc hăng say, hãy dành khoảng thời gian thư giãn tận hưởng cho bản thân cùng tách cà phê mà bạn yêu thích.
                    </p>
                    <ul class="social">
                        <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                        <li><a href="#"><i class="lni lni-twitter-original"></i></a></li>
                        <li><a href="#"><i class="lni lni-instagram-original"></i></a></li>
                        <li><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
                    </ul>
                </div> <!-- row -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== ABOUT PART ENDS ======-->

<!--====== COUNTER PART START ======-->

<section id="counter" class="counter_area pt-50 pb-95 bg_cover text-center" style="background-image: url({{ asset('/interface/images/counter_bg.jpg')}})">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <div class="single_counter mt-30 wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.2s">
                    <span class="count"><span class="counter">36546</span></span>
                    <p>Sản phẩm bán ra</p>
                </div> <!-- single counter -->
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="single_counter mt-30 wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.5s">
                    <span class="count"><span class="counter">28</span></span>
                    <p>Vị cà phê khác nhau</p>
                </div> <!-- single counter -->
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="single_counter mt-30 wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.8s">
                    <span class="count"><span class="counter">12</span></span>
                    <p>Năm thành lập</p>
                </div> <!-- single counter -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== COUNTER PART ENDS ======-->

<!-- BEST COFFEE SELLERS -->
<section id="menu" class="coffee_menu bg_cover pt-50 pb-50">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="section_title text-center pb-30">
                    <h4 class="title">Đậm vị cà phê việt</h4>
                    <span class="line"></span>
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


<section id="customer" class="customer_area pb-30">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_title text-center pb-30">
                    <h4 class="title">Blog Cà phê</h4>
                    <span class="line"></span>
                </div>
            </div>
        </div>
        @foreach($hotBlogs as $blog)
        <div class="col-md-4 d-flex wow fadeInUp">
            <div class="align-self-stretch overflow-hidden">
                <img width="100%" height="300px" src="{{$blog->main_image}}" alt="" srcset="">
                </img>
                <div class="text py-4 d-block h-50">
                    <div class="meta">
                        <p>{{ \Carbon\Carbon::parse($blog->created_at)->format('d/m/Y') }}</p>
                    </div>
                    <a class="" href="{{route('users.posts',['id'=>$blog->id])}}">
                        <h4>{{$blog->title}}</h4>
                    </a>
                    <p>{{ substr(strip_tags($blog->content), 0, 200) }}</p>
                    <!-- <div>{!! $blog->content !!}</div> -->

                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

@endsection