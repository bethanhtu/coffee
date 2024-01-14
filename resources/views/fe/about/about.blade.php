@extends('fe.layout')
@section('content')
<style>
    .single_slider {
        height: 400px;
    }
</style>
<div id="home" class="">
    <div class="single_slider bg_cover d-flex align-items-center" style="background-image: url({{ asset('/interface/images/slider-1.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="slider_content text-center">
                        <h2 class="slider_title text-primary">WinterCoffee</h2>
                        <p class="wow fadeInUp">Ý nghĩa cuộc sống nằm trong chính vẻ đẹp của từng khoảnh khắc</p>
                        <!-- <a href="#about" class="btn btn-outline-primary mt-3">Learn More</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--====== ABOUT PART START ======-->

<section id="about" class="about_area pt-50 pb-60">
    <div class="container">
        <!-- row -->
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about_image mt-50 wow fadeInRightBig" data-wow-duration="1.3s" data-wow-delay="0.5s">
                    <img src="{{ asset('/interface/images/about-1.jpg')}}" alt="about">
                </div> <!-- about image -->
            </div>
            <div class="col-lg-6">
                <div class="about_content mt-45 wow fadeInLeftBig" data-wow-duration="1.3s" data-wow-delay="0.5s">
                    <h4 class="about_title">Sứ mệnh thương hiệu</h4>
                    <p>Thế giới cà phê có vẻ phức tạp, nhưng không khó để nắm bắt những điều cơ bản.
                        Một khi đã hiểu về cà phê, bạn sẽ càng say mê và tận hưởng từng khoảnh khắc.Đa dạng cho mọi khẩu vị và cho mọi khoảnh khắc trong ngày. Sau một ngày làm việc hăng say, hãy dành khoảng thời gian thư giãn tận hưởng cho bản thân cùng tách cà phê mà bạn yêu thích.
                    </p>
                </div>
            </div>
        </div>
        <!-- row -->
        <!-- row -->
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about_content mt-45 wow fadeInLeftBig" data-wow-duration="1.3s" data-wow-delay="0.5s">
                    <h4 class="about_title">Tuyên ngôn thương hiệu</h4>
                    <p>Trong một thế giới luôn chuyển động không ngừng, bộn bề công việc rât dễ khiến tâm trí chúng ta bị xao nhãng mà chợt quên trân trọng những khoảnh khắc đẹp đẽ đang diễn ra xung quanh mình.

                        NESCAFÉ tin rằng cuộc sống sẽ tốt đẹp hơn khi chúng ta “thưởng thức” trọn vẹn từng phút giây của hiện tại và tạo nên những khoảnh khắc ý nghĩa đáng nhớ cho cuộc sống khi cùng nhâm nhi một tách cà phê tuyệt hảo.

                        Cho khởi đầu ngày mới đầy hứng khởi, hay sẻ chia cùng gia đình và bạn bè: bạn là người tạo nên khoảnh khắc trọn vẹn ý nghĩa, chúng tôi mang đến tách cà phê đa dạng cho mọi khoảnh khắc.

                        NESCAFÉ – Cho từng khoảnh khắc ý nghĩa của riêng bạn.
                    </p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about_image mt-50 wow fadeInRightBig" data-wow-duration="1.3s" data-wow-delay="0.5s">
                    <img src="{{ asset('/interface/images/about-2.jpg')}}" alt="about">
                </div> <!-- about image -->
            </div>

        </div>
        <!-- row -->
        <!-- row -->
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about_image mt-50 wow fadeInRightBig" data-wow-duration="1.3s" data-wow-delay="0.5s">
                    <img src="{{ asset('/interface/images/about-3.jpg')}}" alt="about">
                </div> <!-- about image -->
            </div>
            <div class="col-lg-6">
                <div class="about_content mt-45 wow fadeInLeftBig" data-wow-duration="1.3s" data-wow-delay="0.5s">
                    <h4 class="about_title">Đa dạng khẩu vị cho mọi khoảnh khắc</h4>
                    <p>NESCAFÉ đem đến danh mục sản phẩm đa dạng đáp ứng mọi nhu cầu, mọi khẩu vị của người Việt Nam, từ cà phê hòa tan, cà phê uống liền và cà phê pha phin. Dù bạn đang có kế hoạch gì, tâm trạng ra sao, sẽ luôn có một loại cà phê phù hợp để mỗi ngày của bạn ý nghĩa đến từng khoảnh khắc.

                        NESCAFÉ là thương hiệu cà phê dành cho mọi người, dễ tìm, dễ uống, để bạn có được tách cà phê ngon một cách dễ dàng giữa bộn bề cuộc sống.
                    </p>
                </div>
            </div>
        </div>
        <!-- row -->
        <!-- row -->
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about_content mt-45 wow fadeInLeftBig" data-wow-duration="1.3s" data-wow-delay="0.5s">
                    <h4 class="about_title">Đa dạng khẩu vị cho mọi khoảnh khắc</h4>
                    <p>NESCAFÉ đem đến danh mục sản phẩm đa dạng đáp ứng mọi nhu cầu, mọi khẩu vị của người Việt Nam, từ cà phê hòa tan, cà phê uống liền và cà phê pha phin. Dù bạn đang có kế hoạch gì, tâm trạng ra sao, sẽ luôn có một loại cà phê phù hợp để mỗi ngày của bạn ý nghĩa đến từng khoảnh khắc.

                        NESCAFÉ là thương hiệu cà phê dành cho mọi người, dễ tìm, dễ uống, để bạn có được tách cà phê ngon một cách dễ dàng giữa bộn bề cuộc sống.
                    </p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about_image mt-50 wow fadeInRightBig" data-wow-duration="1.3s" data-wow-delay="0.5s">
                    <img src="{{ asset('/interface/images/about-4.jpg')}}" alt="about">
                </div> <!-- about image -->
            </div>

        </div>
        <!-- row -->
    </div> <!-- container -->
</section>


<!-- <section id="customer" class="customer_area pb-30">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_title text-center pb-30">
                    <h4 class="title">Đội ngũ của chúng tôi</h4>
                </div>
            </div>
        </div>
        <div class="row customer_active">
            <div class="col-lg-6">
                <div class="single_customer d-sm-flex align-items-center mt-30">
                    <div class="customer_image">
                        <img src="{{ asset('/interface/images/customer-1.jpg')}}" alt="customer">
                    </div>
                    <div class="customer_content media-body">
                        <div class="customer_content_wrapper media-body">
                            <h5 class="author_name">Bế Thanh Tú</h5>
                            <span class="sub_title">Coffee Lover</span>
                            <p>Lorem ipsum dolor sit amdi scing elitr, sed diam nonumy eirmo tem invidunt ut labore etdolo magna aliquyam erat, sed diam voluptua. At vero eos et accusam.</p>
                            <ul class="star">
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="single_customer d-sm-flex align-items-center mt-30">
                    <div class="customer_image">
                        <img src="{{ asset('/interface/images/customer-2.jpg')}}" alt="customer">
                    </div>
                    <div class="customer_content media-body">
                        <div class="customer_content_wrapper media-body">
                            <h5 class="author_name">Nguyễn Tuấn Anh</h5>
                            <span class="sub_title">Coffee Enthusiast</span>
                            <p>Lorem ipsum dolor sit amdi scing elitr, sed diam nonumy eirmo tem invidunt ut labore etdolo magna aliquyam erat, sed diam voluptua. At vero eos et accusam.</p>
                            <ul class="star">
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="single_customer d-sm-flex align-items-center mt-30">
                    <div class="customer_image">
                        <img src="{{ asset('/interface/images/customer-3.jpg')}}" alt="customer">
                    </div>
                    <div class="customer_content media-body">
                        <div class="customer_content_wrapper media-body">
                            <h5 class="author_name">Tạ Quang Bình</h5>
                            <span class="sub_title">Enthusiasts</span>
                            <p>Lorem ipsum dolor sit amdi scing elitr, sed diam nonumy eirmo tem invidunt ut labore etdolo magna aliquyam erat, sed diam voluptua. At vero eos et accusam.</p>
                            <ul class="star">
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="single_customer d-sm-flex align-items-center mt-30">
                    <div class="customer_image">
                        <img src="{{ asset('/interface/images/customer-3.jpg')}}" alt="customer">
                    </div>
                    <div class="customer_content media-body">
                        <div class="customer_content_wrapper media-body">
                            <h5 class="author_name">Vũ Văn Khanh</h5>
                            <span class="sub_title">Enthusiasts</span>
                            <p>Lorem ipsum dolor sit amdi scing elitr, sed diam nonumy eirmo tem invidunt ut labore etdolo magna aliquyam erat, sed diam voluptua. At vero eos et accusam.</p>
                            <ul class="star">
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="single_customer d-sm-flex align-items-center mt-30">
                    <div class="customer_image">
                        <img src="{{ asset('/interface/images/customer-3.jpg')}}" alt="customer">
                    </div>
                    <div class="customer_content media-body">
                        <div class="customer_content_wrapper media-body">
                            <h5 class="author_name">Nguyễn Hữu Việt</h5>
                            <span class="sub_title">Enthusiasts</span>
                            <p>Lorem ipsum dolor sit amdi scing elitr, sed diam nonumy eirmo tem invidunt ut labore etdolo magna aliquyam erat, sed diam voluptua. At vero eos et accusam.</p>
                            <ul class="star">
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!--====== ABOUT PART ENDS ======-->

@endsection