@extends('be.layout')
@section('content')
<div class="col-lg-12">
    @if(count($list) > 0)
    <!-- Table -->
    <div class="table-responsive">
        <h4 class="text-primary font-weight-bold">Đơn hàng mới</h4>
        <table class="table table-hover rounded-top overflow-hidden" id="">
            <thead class="table">
                <tr class="bg-primary text-white rounded-top">
                    <th>Mã đơn hàng</th>
                    <th>Ngày đặt hàng</th>
                    <th>Trạng thái đơn hàng</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                @foreach($list as $item)
                @if($item->status == 1)
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
                    <td>
                        <a href="{{route('admin.orders.detail',['id'=>$item->id])}}" array="{{$item}}" id="{{$item->id}}" class="btn btn-link">Chi tiết</a>
                        <a array="{{$item}}" id="{{$item->id}}" class="edituser btn btn-link">Cập nhật</a>
                    </td>
                </tr>
                @endif
                @endforeach
            </tbody>
        </table>

    </div>
    @else
    <p>Không có đơn hàng có trạng thái là 1.</p>
    @endif
    <!-- Table -->
    <div class="table-responsive">
        <h2 class="text-primary font-weight-bold">Đơn hàng</h2>
        <table class="table table-hover rounded-top overflow-hidden" id="dataTable">
            <thead class="table">
                <tr class="bg-primary text-white rounded-top">
                    <th>Mã đơn hàng</th>
                    <th>Ngày đặt hàng</th>
                    <th>Trạng thái đơn hàng</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                @foreach($list as $item)
                @if($item->status >= 2)
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
                    <td>
                        <a href="{{route('admin.orders.detail',['id'=>$item->id])}}" array="{{$item}}" id="{{$item->id}}" class="btn btn-link">Chi tiết</a>
                        <a array="{{$item}}" id="{{$item->id}}" class="edituser btn btn-link">Cập nhật</a>
                    </td>
                </tr>
                @endif
                @endforeach

            </tbody>
        </table>
    </div>
    <div class="modal fade" id="modalupdate">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{route('admin.order.edit')}}" method="post" role="form" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <legend>Cập nhật trạng thái đơn hàng</legend>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="" for="">ID</label>
                            <input type="text" class="form-control" id="eid" name="id" readonly="">
                        </div>
                        <div class="form-group">
                            <label for="">Tình trạng đơn hàng</label>
                            <select id="status" name="status" class="form-control">
                                <option value="1">Chưa giải quyết</option>
                                <option value="2">Đang giải quyết</option>
                                <option value="3">Đang giao hàng</option>
                                <option value="4">Đã giao hàng</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-link" data-dismiss="modal">Đóng</button>
                        <button type="submit" name="insert" class="btn btn-link">Cập nhật</button>
                    </div>
                </form>
            </div>
        </div>
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