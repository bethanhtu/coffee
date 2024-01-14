@extends('fe.layout')
@section('content')
<section style="background-color: #eee; margin-top: 84px;">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <img src="https://www.shutterstock.com/image-vector/vector-line-icon-select-260nw-2340983585.jpg" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                        <h5 class="my-3">{{$user->name}}</h5>
                        <p class="text-muted mb-1">
                            @if($user->level == 1)
                            Quản trị viên
                            @else
                            Thành viên kim cương
                            @endif
                        </p>

                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Tên</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{$user->name}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Địa chỉ email</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{$user->email}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Số điện thoại</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{$user->phone}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Địa chỉ</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">Chưa cập nhật</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                            </div>
                            <div class="col-sm-9 pt-3">
                                <a class="" data-toggle="modal" data-target="#modalinsert" style="cursor: pointer;">Đổi mật khẩu</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="modalinsert">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <legend>Đổi mật khẩu</legend>
            </div>
            <div class="modal-body">
                <form class="user" action="{{ route('change-password') }}" method="post" role="form">
                    @csrf
                    <div class="form-group">
                        <input type="password" class="form-control form-control-user" id="current_password" name="current_password" placeholder="Mật khẩu hiện tại" minlength="5" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control form-control-user" id="new_password" name="new_password" placeholder="Mật khẩu mới" minlength="5" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control form-control-user" id="confirm_password" name="confirm_password" placeholder="Xác nhận mật khẩu mới" minlength="5" required>
                    </div>

                    <button class="btn btn-primary btn-user btn-block" type="submit">Đổi mật khẩu</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection