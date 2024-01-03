@extends('be.layout')
@section('content')
<div class="col-lg-12">
    <div class="d-flex justify-content-between">
        <h2 class="text-primary font-weight-bold">Đơn hàng</h2>
    </div>
    <div>
        <hr>
    </div>
    <!-- Table -->
    <div class="table-responsive">
        <table class="table table-hover rounded-top overflow-hidden" id="dataTable">
            <thead class="table">
                <tr class="bg-primary text-white rounded-top">
                    <th>Mã đơn hàng</th>
                    <th>Ngày đặt hàng</th>
                    <th>Trạng thái đơn hàng</th>
                    <th>Ghi chú </th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                @foreach($list as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->created_at}}</td>
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
                    <td>{{$item->note}}</td>
                    <td>
                        <a href="{{route('admin.orders.detail',['id'=>$item->id])}}" array="{{$item}}" id="{{$item->id}}" class="edituser btn btn-link">Chi tiết</a>
                    </td>
                </tr>
                @endforeach
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