@extends('be.layout')
@section('content')
    <div class="col-lg-12">
        <div class="d-flex justify-content-between">
            <h2 class="text-primary font-weight-bold">Quản trị viên</h2>
            <button class="btn btn-link" data-toggle="modal" data-target="#modalinsert">Thêm</button>
        </div>
        <div><hr></div>
        <!-- Table -->
        <div class="table-responsive">
            <table class="table table-hover rounded-top overflow-hidden" id="dataTable">
                <thead class="table">
                <tr class="bg-primary text-white rounded-top">
                    <th>id</th>
                    <th>Tên</th>
                    <th>Email</th>
                    <th>Số điện thoại</th>
                    <th>Thao tác</th>
                </tr>
                </thead>
                <tbody>
                @foreach($list as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td class="font-weight-bold">{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->phone}}</td>
                    <td>
                        <a array="{{$item}}" id="{{$item->id}}" class="edituser btn btn-link">Sửa</a>
                        <a class="btn btn-link" href="{{route('admin.user.delete', ['id'=>$item->id])}}" onclick="return confirm('Bạn có muốn xóa không')">Xóa</a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <!-- Modal add -->
        <div class="modal fade" id="modalinsert" >
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{route('admin.user.add')}}"  method="post"   role="form" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-header">
                            <legend>Thêm thông tin User</legend>
                        </div>
                        <div class="modal-body">

                            <div class="form-group">
                                <label for="">Tên</label><span id="errorname">@error('name'){{$message}}@enderror</span>
                                <input type="text" class="form-control"  id="name" name="name"   value="" onblur="checkname()"; Required />
                            </div>

                            <div class="form-group">
                                <label for="">Email</label> <span id="erroremail">@error('email'){{$message}}@enderror</span>
                                <input type="text" class="form-control"  id="email" name="email"  value="" onblur="checkEmail();" Required>
                            </div>


                            <div class="form-group">
                                <label for="">password</label> <span id="errorpassword">@error('password'){{$message}}@enderror</span>
                                <input type="password" class="form-control" id="password" name="password"   value="" onblur="checkPass();" Required>
                            </div>

                            <div class="form-group">
                                <label for="">phone</label> <span id="errorphone">@error('phone'){{$message}}@enderror</span>
                                <input type="number" class="form-control" id="phone" name="phone" value="" onblur="checkPhone();" Required>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                            <button type="submit"  name="insert" class="btn btn-primary">Thêm</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal update -->
        <div class="modal fade" id="modalupdate" >
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{route('admin.user.edit')}}"  method="post"   role="form" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-header">
                            <legend>Sửa thông tin User</legend>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="">ID</label>
                                <input type="text" class="form-control"  id="eid" name="id" readonly="">
                            </div>

                            <div class="form-group">
                                <label for="">Tên</label> <span id="errorname"></span>
                                <input type="text" class="form-control"  id="ename" name="name"   value="" onblur="checkname()"; Required />
                            </div>

                            <div class="form-group">
                                <label for="">Email</label> <span id="erroremail"></span>
                                <input type="text" class="form-control"  id="eemail" name="email"  value="" onblur="checkEmail();" Required>
                            </div>


                            <div class="form-group">
                                <label for="">Password</label> <span id="errorpassword"></span>
                                <input type="password" class="form-control" id="epassword" name="password"   value="" onblur="checkPass();">
                            </div>

                            <div class="form-group">
                                <label for="">Phone</label> <span id="errorphone"></span>
                                <input type="number" class="form-control" id="ephone" name="phone" value="" onblur="checkPhone();" Required>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" id="modalupdateBtn" data-dismiss="modal">Đóng</button>
                            <button type="submit"  name="insert" class="btn btn-primary"><i class="fas fa-save mr-1"></i>Lưu</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection