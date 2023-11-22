@extends('be.layout')
@section('content')
    <div class="col-lg-12">
        <h2>Product</h2>
        <div class="text-right" >
            <a class="btn btn-primary" href="{{route('admin.product.doAdd')}}"> Thêm</a>
        </div>
        <div><hr></div>
        <div class="table-responsive">
            <table class="table table-hover table-striped" id="dataTable">
                <thead class="table">
                <tr class="bg-primary text-white">
                    <th>Id</th>
                    <th>Tên</th>
                    <th>Ảnh</th>
                    <th>Loại</th>
                    <th>Số lượng</th>
                    <th>Giá</th>
                    <th>Nội dung</th>
                    <th>Thao tác</th>
                </tr>
                </thead>
                <tbody>
                @foreach($list as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{ substr($item->name, 0, 20) }}</td>
                        <td>
                            <img width="50px" src="{{asset($item->main_image)}}">
                            <img width="50px" src="{{asset($item->second_image)}}">

                        </td>
                        <td>{{$item->category_id}}</td>
                        <td>{{$item->quantity}}</td>
                        <td>{{$item->price}}</td>           
                        <td>{{ substr($item->content, 3, 20) }}</td>
                        <td>
                            <a class="btn btn-sm btn-warning" href="{{route('admin.product.doEdit',['id'=>$item->id])}}">Sửa</a>
                            <a class="btn btn-sm btn-danger" href="{{route('admin.user.delete',['id'=>$item->id])}}" onclick="return confirm('Bạn có muốn xoá ?')">Xóa</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="modal fade" id="modalinsert" >
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{route('admin.product.add')}}"  method="post"   role="form" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-header">
                            <legend>Thêm thông tin sản phẩm</legend>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="">Tên</label> <span id="errorname"></span>
                                <input type="text" class="form-control"  id="name" name="name"   value="{{old('name')}}" onblur="checkname()"; Required />
                            </div>
                            <div class="form-group">
                                <label for="">Loại sản phẩm</label>
                                <select  id="category_id" name="category_id" class="form-control" >
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Xuất xứ</label> <span id="errororigin"></span>
                                <input type="text" class="form-control" id="origin" name="origin"  value="{{old('origin')}}" onblur="checkOrigin();" Required>
                            </div>
                            <div class="form-group">
                                <label for="">Ảnh chính</label><span id="errormain"></span>
                                <input type="file" class="form-control" id="mainImage" name="mainImage"  accept="image/png, image/gif, image/jpeg" onchange="checkImageMain();" value="" Required>
                            </div>

                            <div class="form-group">
                                <label for="">Ảnh phụ</label><span id="errorsecond"></span>
                                <input type="file" class="form-control" id="secondImage" name="secondImage" accept="image/png, image/gif, image/jpeg" onchange="checkImageSecond();" value="" Required>
                            </div>

                            <div class="form-group">
                                <label for="">Giá</label> <span id="errorprice"></span>
                                <input type="number" class="form-control" id="price" name="price"  value="{{old('price')}}" onblur="checkPrice();" Required>
                            </div>

                            <div class="form-group">
                                <label for="">Số lượng</label> <span id="errorquantity"></span>
                                <input type="number" class="form-control" id="quantity" name="quantity"  value="{{old('quantity')}}" onblur="checkQuantity();">
                            </div>

                            <div class="form-group">
                                <label for="">Mô tả ngắn</label> <span id="errordescription"></span>
                                <input type="text" class="form-control" id="description" name="description"  value="{{old('description')}}" onblur="checkDescription();" Required>
                            </div>

                            <div class="form-group">
                                <label for="">Mô tả</label>
                                <textarea  class="form-control ckeditor" id="editor" name="content"  value="{{old('content')}}" ></textarea>
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
                                <label for="">password</label> <span id="errorpassword"></span>
                                <input type="password" class="form-control" id="epassword" name="password"   value="" onblur="checkPass();" Required>
                            </div>

                            <div class="form-group">
                                <label for="">phone</label> <span id="errorphone"></span>
                                <input type="number" class="form-control" id="ephone" name="phone" value="" onblur="checkPhone();" Required>
                            </div>


                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                            <button type="submit"  name="insert" class="btn btn-primary">Sửa</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection