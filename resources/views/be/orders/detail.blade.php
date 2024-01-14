@extends('be.layout')
@section('content')
<section class="h-100 h-custom">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-10 col-xl-8">
                <div class="card border-top border-bottom border-3">
                    <div class="card-body p-5">
                        <h2 class="text-primary font-weight-bold mb-3">Thông tin đơn hàng</h2>
                        <div class="row">
                            <div class="col mb-3">
                                <p class="text-muted mb-1">Tên người nhận</p>
                                <p class="font-weight-bold">{{$order->name}}</p>
                            </div>
                            <div class="col mb-3">
                                <p class="text-muted mb-1">Số điện thoại</p>
                                <p class="font-weight-bold">{{$order->phone}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <p class="text-muted mb-1">Địa chỉ</p>
                                <p class="font-weight-bold">{{$order->address}}</p>
                            </div>
                            <div class="col mb-3">
                                <p class="text-muted mb-1">Ghi chú</p>
                                <p class="font-weight-bold">{{$order->note}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <p class="text-muted mb-1">Ngày đặt</p>
                                <p class="font-weight-bold">{{$order->created_at}}</p>
                            </div>
                            <div class="col mb-3">
                                <p class="text-muted mb-1">Mã đơn hàng</p>
                                <p class="font-weight-bold">{{$order->id}}</p>
                            </div>
                        </div>

                        <div class="mx-n5 px-5 py-4" style="background-color: #f2f2f2;">
                            <div class="row">
                                @foreach($ordersdetail as $value)
                                <div class="col-md-8 col-lg-9">

                                    <div class="d-flex align-items-center">
                                        <img src="{{asset($value->product->main_image)}}" width="60px" />
                                        <p class="font-weight-bold ml-2">{{$value->product->name}}</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-3">
                                    <p class="font-weight-bold">{{number_format($value->total, 0) }} đ</p>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="row my-4">
                            <div class="col-12">
                                <span>Giá trị đơn hàng:</span>
                                <p class="lead font-weight-bold mb-0">{{number_format($order->total_price, 0) }} đ</p>
                            </div>
                        </div>

                        <p class="lead fw-bold mb-4 pb-2">Tình trạng đơn hàng</p>

                        <div class="row">
                            <div class="col-lg-12">

                                <div class="horizontal-timeline">

                                    <ul class="list-inline items d-flex justify-content-between">
                                        <li class="list-inline-item items-list">
                                            <p class="py-1 px-2 rounded text-white bg-primary">Ordered</p>
                                        </li>
                                        <li class="list-inline-item items-list">
                                            <p class="py-1 px-2 rounded text-white bg-primary">Shipped</p>
                                        </li>
                                        <li class="list-inline-item items-list">
                                            <p class="py-1 px-2 rounded text-white bg-primary">On the way
                                            </p>
                                        </li>
                                        <li class="list-inline-item items-list text-end" style="margin-right: 8px;">
                                            <p style="margin-right: -8px;">Delivered</p>
                                        </li>
                                    </ul>


                                </div>

                            </div>
                        </div>

                        <p class="mt-4 pt-2 mb-0">Want any help? <a href="#!">Please contact
                                us</a></p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    ClassicEditor
        .create(document.querySelector('#editor'), {
            ckfinder: {
                uploadUrl: "{{route('image.upload').'?_token='.csrf_token()}}",
            }
        })
        .catch(error => {
            console.error(error);
        });
</script>
<script>

</script>

@endsection