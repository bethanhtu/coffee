@extends('fe.layout')
@section('content')
<style>
    .single_slider {
        margin-top: 84px;
        height: 400px;
    }
</style>
<div id="home" class="">
    <div class="single_slider bg_cover d-flex align-items-center" style="background-image: url({{asset($blogs->main_image)}})"></div>
</div>
<div class="container ">
    <div class="mx-auto w-75 d-flex flex-column align-items-center">
        {!! $blogs->content !!}

    </div>
</div>

@endsection