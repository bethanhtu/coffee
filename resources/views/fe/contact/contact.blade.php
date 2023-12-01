@extends('fe.layout')
@section('content')
<div style="margin-top: 84px;"></div>
<section class="container pt-50 pb-50">
    <div class="">
        <div class="row block-9">
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12 mb-4">
                        <h2 class="h4">Thông tin liên hệ</h2>
                    </div>
                    <div class="col-md-12 mb-3">
                        <p><span>Địa chỉ:</span> Số 128A Hồ Tùng Mậu, Mai Dịch, Cầu Giấy, Hà Nội</p>
                    </div>
                    <div class="col-md-12 mb-3">
                        <p><span>Số điện thoại:</span> <a href="tel://1234567920">+ 1900 8989</a></p>
                    </div>
                    <div class="col-md-12 mb-3">
                        <p><span>Email:</span> <a href="#">coffee@gmail.com</a></p>
                    </div>
                    <div class="col-md-12 mb-3">
                        <p><span>Website:</span> <a href="#">wintercoffee.com</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-6">
                <form action="#" class="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Tên của bạn">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Tiêu đề">
                    </div>
                    <div class="form-group">
                        <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Aa..."></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection