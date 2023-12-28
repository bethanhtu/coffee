@extends('fe.layout')
@section('content')
<div class="mt-120">
    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="{{route('users.home')}}"><i class="fa fa-home"></i>Trang chủ</a>
                        <a href="{{route('shop-cart')}}"><i class="fa fa-shopping-cart"></i>Giỏ hàng</a>
                        <span>Thanh toán</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <form action="{{route('order')}}" class="checkout__form" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-8">
                        <h5>Chi tiết thanh toán</h5>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <p>Tên <span>*</span></p>
                                    <input class="form-control" required="" type="text" id="name" name="name" value="{{old('name')}}">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <p>Địa chỉ <span>*</span></p>
                                    <input class="form-control" required="" type="text" id="address" name="address" value="{{old('address')}}">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-group">
                                    <p>Số điện thoại <span>*</span></p>
                                    <input class="form-control" equired="" type="tell" id="phone" name="phone" value="{{old('phone')}}">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-group">
                                    <p>Email <span>*</span></p>
                                    <input class="form-control" required="" type="email" id="email" name="email" value="{{old('email')}}">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <p>Ghi chú<span>*</span></p>
                                    <input class="form-control" type="text" id="note" name="note" value="{{old('note')}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="checkout__order">
                            <h4>Giỏ hàng của bạn</h4>
                            <hr>
                            <div class="checkout__order__product">
                                <ul>
                                    @if(session('CART'))
                                    @foreach(session('CART') as $cart)
                                    <li class="d-flex mb-4" id="data-cart">
                                        <img width="60" height="60" src="{{asset($cart['product']['main_image'])}}" alt="Card image cap">
                                        <div class="d-flex flex-column justify-content-between w-100 mx-2">
                                            <h6>{{$cart['product']['name']}}</h6>
                                            <p> Giá: {{number_format($cart['product']['price'], 0) }}</p>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <h6 id="total-price">Tổng thanh toán: {{number_format($total)}} đ</h6>
                            @endif
                            @if(!empty(session('CART')))
                            <button type="submit" class="btn btn-primary py-2 px-4" name="order">Đặt hàng</button>
                            @endif
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- Checkout Section End -->
</div>
@endsection