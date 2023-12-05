@extends('fe.layout')
@section('content')
<div style="margin-top: 84px;"></div>
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
            <ul>
                <h4>Giỏ hàng</h4>
                <hr>
                <li class="d-flex mb-4">
                    <img width="60" height="60" src="http://127.0.0.1:8000/storage/products/17015027141CP-1-300x300.jpg" alt="Card image cap">
                    <div class="d-flex flex-column justify-content-between w-100 mx-2">
                        <h6>Cà Phê Đen Đá Hộp (14 gói x 16g)</h6>
                        <p>Số lượng :</p>
                    </div>
                    <div class="">
                        <a class="btn btn-link btn-sm" href="">Sửa</a>
                        <a class="btn btn-link btn-sm" href="" data-mdb-ripple-color="dark" onclick="return confirm('Bạn có muốn xoá ?')">Xóa</a>
                    </div>
                </li>
                <li class="d-flex mb-4">
                    <img width="60" height="60" src="http://127.0.0.1:8000/storage/products/17015027141CP-1-300x300.jpg" alt="Card image cap">
                    <div class="d-flex flex-column justify-content-between w-100 mx-2">
                        <h6>Cà Phê Đen Đá Hộp (14 gói x 16g)</h6>
                        <p>Số lượng :</p>
                    </div>
                    <div class="">
                        <a class="btn btn-link btn-sm" href="">Sửa</a>
                        <a class="btn btn-link btn-sm" href="" data-mdb-ripple-color="dark" onclick="return confirm('Bạn có muốn xoá ?')">Xóa</a>
                    </div>
                </li>
            </ul>

            <div class="mt-3">
                <h4>Tổng cộng:</h4>
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
                </div>
            </div>
            <hr>
            <div class="d-flex justify-content-between">
                <div>
                    <span>Tổng thanh toán:</span>
                    <h6>199.999đ</h6>
                </div>
                <div>
                    <button class="btn btn-primary py-2 px-4">Đặt ngay</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection