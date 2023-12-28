@extends('fe.layout')
@section('content')
<div style="margin-top: 84px;"></div>
<section class="shop-cart spad">
    <div class="container">
        <!-- Outer Row -->
        <div class="row py-5">
            <div class="col-lg-6 p-3">
                <h4>Thông tin:</h4>
                <hr>
                <form action="#" class="">
                    <div class="form-group">
                        <label for="">Địa chỉ giao hàng</label>
                        <input type="text" class="form-control" placeholder="Địa chỉ">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Tên người nhận">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Số điện thoại">
                    </div>
                    <div class="form-group">
                        <textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="Ghi chú"></textarea>
                    </div>

                    <h4>Phương thức thanh toán:</h4>

                    <!-- Default radio -->
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" />
                        <label class="form-check-label" for="flexRadioDefault1"> Tiền mặt </label>
                    </div>

                    <!-- Default checked radio -->
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked />
                        <label class="form-check-label" for="flexRadioDefault2"> Momo </label>
                    </div>

                    <!-- Default checked radio -->
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked />
                        <label class="form-check-label" for="flexRadioDefault2"> ZaloPay </label>
                    </div>
                    <!-- Default checked radio -->
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked />
                        <label class="form-check-label" for="flexRadioDefault2"> ShopeePay </label>
                    </div>
                </form>

            </div>
            <div class="col-lg-6 p-3 shadow-lg border rounded">
                @if(session('CART'))
                <ul id="cart">
                    <h4>Giỏ hàng</h4>
                    <hr>
                    @foreach(session('CART') as $cart)
                    <li class="d-flex mb-4" id="data-cart">
                        <img width="60" height="60" src="{{asset($cart['product']['main_image'])}}" alt="Card image cap">
                        <div class="d-flex flex-column justify-content-between w-100 mx-2">
                            <h6>{{$cart['product']['name']}}</h6>
                            <p> Giá: {{number_format($cart['product']['price'], 0) }}</p>
                            <input min="1" id="{{$cart['product']['id']}}" type="number" class="update-cart" pattern="[0-9]" value="{{$cart['quantity']}}" readonly>
                            <p>Tổng tiền: {{number_format($cart['product']['price']* $cart['quantity'], 0) }}</p>
                        </div>
                        <div class="">
                            <button class="btn btn-link btn-sm del-cart" id="{{$cart['product']['id']}}"><span class="fas fa-trash"></span></button>
                        </div>
                    </li>
                    @endforeach
                </ul>
                @else
                <div class="container" th:if="${session.myCartItems == null}">
                    <div class="col-md-6 offset-md-3">
                        <div class="noti_listProduct">
                            <h4>Giỏ hàng trống</h4>
                            <div class="link">
                                <a href="{{route('users.home')}}">Về Trang Chủ</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endif

                <div class="mt-3">
                    <!-- <h4>Tổng cộng:</h4>
                <hr>
                <div class="d-flex justify-content-between">
                    <p>Thành tiền:</p>
                    <p>190.000đ</p>
                </div>
                <hr>
                <div class="d-flex justify-content-between">
                    <p>Phí giao hàng:</p>
                    <p>190.000đ</p>
                </div>
                <div class="d-flex justify-content-between">
                    <p>Khuyến mãi:</p>
                    <p>0đ</p>
                </div> -->
                </div>
                <hr>
                <div class="d-flex justify-content-between">
                    <div id="total">
                        <h6 id="total-price">Tổng thanh toán: <br>{{number_format($total)}} đ</h6>
                    </div>
                    <div>
                        <button class="btn btn-primary py-2 px-4">Đặt ngay</button>
                        <a href="{{route('check-out')}}" class="primary-btn" style="margin-bottom:20px">COD</a>
                            <a href="{{route('check-out')}}" class="primary-btn">VNPAY</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection