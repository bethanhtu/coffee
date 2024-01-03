@extends('be.layout')
@section('content')
<div class="col-lg-12">
    <div class="d-flex justify-content-between">
        <h2 class="text-primary font-weight-bold">Chi tiết đơn hàng</h2>
    </div>
    <div>
        <hr>
    </div>
    <!-- Table -->
    <div class="table-responsive">
        <table class="table table-hover rounded-top overflow-hidden" id="dataTable">
            <thead class="table">
                <tr class="bg-primary text-white rounded-top">
                    <th>Tên người nhận</th>
                    <th>Điện thoại</th>
                    <th>Email</th>
                    <th>Ghi chú </th>
                    <th>Sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Đơn giá</th>
                    <th>Tổng tiền</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$order->name}}</td>
                    <td>{{$order->phone}}</td>
                    <td>{{$order->address}}</td>
                    <td>{{$order->note}}</td>
                    <td class="w-25">
                        <div class="d-flex align-items-center">
                            <img src="{{asset($product->main_image)}}" width="45px" />
                            <p class="font-weight-bold ml-2">{{$product->name}}</p>
                        </div>
                    </td>   
                    <td>{{$ordersdetail->quantity}}</td>

                    <td>{{$ordersdetail->price}}</td>

                    <td>{{$ordersdetail->total}}</td>
                </tr>
            </tbody>
        </table>
    </div>

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