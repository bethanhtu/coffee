@extends('fe.layout')
@section('content')
<div style="margin-top: 84px;"></div>
<img src="{{ asset('/interface/images/slider-p.jpg')}}" alt="" srcset="">
<!--====== ABOUT PART START ======-->

<section id="about" class="about_area pt-50 pb-60">
    <div class="container">
        <!-- row -->
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about_image mt-50 wow fadeInRightBig" data-wow-duration="1.3s" data-wow-delay="0.5s">
                    <img src="{{ asset('/interface/images/about.jpg')}}" alt="about">
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
                    <img src="{{ asset('/interface/images/about.jpg')}}" alt="about">
                </div> <!-- about image -->
            </div>
            
        </div>
        <!-- row -->
        <!-- row -->
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about_image mt-50 wow fadeInRightBig" data-wow-duration="1.3s" data-wow-delay="0.5s">
                    <img src="{{ asset('/interface/images/about.jpg')}}" alt="about">
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
    </div> <!-- container -->
</section>

<!--====== ABOUT PART ENDS ======-->

@endsection