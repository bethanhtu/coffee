@extends('fe.layout')
@section('content')
<div style="margin-top: 84px;"></div>

<div class="container">
    <div class="d-flex justify-content-between">
        <h2 class="text-primary font-weight-bold">Đơn hàng</h2>
    </div>
    <div class="table-responsive">

        <!--Table-->
        <table class="table table-hover align-middle rounded-top overflow-hidden">

            <!--Table head-->
            <thead>
                <tr>
                    <th class="th-sm">Mã đơn hàng</th>
                    <th class="th-sm">Tổng tiền</th>
                    <th class="th-sm">Tình trạng đơn hàng</th>
                    <th class="th-sm">Hình thức thanh toán</th>
                </tr>
            </thead>
            <!--Table head-->

            <!--Table body-->
            <tbody>
                @foreach($myorder as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td class="font-weight-bold">{{ number_format($item->total_price)}}đ</td>
                    <td class="font-weight-bold">
                        @if($item->status == 1)
                        Chưa giải quyết
                        @elseif($item->status == 2)
                        Đang giải quyết
                        @elseif($item->status == 3)
                        Đang giao hàng
                        @elseif($item->status == 4)
                        Đã giao hàng
                        @else
                        Không xác định
                        @endif
                    </td>
                    <td class="font-weight-bold">
                        @if($item->method == 1)
                        Tiền mặt
                        @elseif($item->method == 2)
                        VNPay
                        @elseif($item->method == 3)
                        Đang giao hàng
                        @elseif($item->method == 4)
                        Đã giao hàng
                        @else
                        Không xác định
                        @endif</td>
                </tr>
                @endforeach
            </tbody>
            <!--Table body-->

        </table>
        <!--Table-->

    </div>
</div>
    @endsection