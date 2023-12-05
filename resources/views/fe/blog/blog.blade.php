@extends('fe.layout')
@section('content')
<style>
    .single_slider {
        height: 400px;
    }
</style>
<div id="home" class="">
    <div class="single_slider bg_cover d-flex align-items-center" style="background-image: url({{ asset('/interface/images/slider-b.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="slider_content text-center">
                        <h2 class="slider_title text-primary">Blog</h2>
                        <p class="wow fadeInUp">Hiểu để thưởng thức trọn ven hơn</p>
                        <!-- <a href="#about" class="btn btn-outline-primary mt-3">Learn More</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="container pt-50 mp-50">
    <div class="row">
        @foreach($blogs as $blog)
        <div class="col-md-4 d-flex">
            <div class="align-self-stretch overflow-hidden">
                <img width="100%" height="300px" src="{{$blog->main_image}}" alt="" srcset="">
                </img>
                <div class="text py-4 d-block h-50">
                    <div class="meta">
                        <div><a href="#">{{ \Carbon\Carbon::parse($blog->created_at)->format('d/m/Y') }}</a></div>
                    </div>
                    <h4 class="" style=""><a href="#">{{$blog->title}}</a></h4>
                    <p>{{ substr(strip_tags($blog->content), 0, 200) }}</p>
                    <!-- <div>{!! $blog->content !!}</div> -->

                </div>
            </div>
        </div>
        @endforeach
    </div>

</section>


@endsection