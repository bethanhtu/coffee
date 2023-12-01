@extends('be.layout')
@section('content')
<div class="col-lg-12">
    <div class="d-flex justify-content-between">
        <h2 class="text-primary font-weight-bold">Sản phẩm</h2>
        <button class="btn btn-link" data-toggle="modal" data-target="#modalinsert">Thêm</button>
    </div>
    <div>
        <hr>
    </div>
    <div class="table-responsive">
        <table class="table table-hover align-middle rounded-top overflow-hidden mb-0 bg-white" id="dataTable">
            <thead class="bg-primary text-white rounded-top">
                <tr class="">
                    <th>id</th>
                    <th>Sản phẩm</th>
                    <th>Giá</th>
                    <th>Loại</th>
                    <th>Số lượng</th>
                    <th colspan="">Mô tả</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                @foreach($list as $item)
                <tr>
                    <td class="w-10">{{$item->id}}</td>
                    <td class="w-25">
                        <div class="d-flex align-items-center">
                            <img src="{{asset($item->main_image)}}" width="45px" />
                            <p class="font-weight-bold ml-2">{{$item->name}}</p>
                        </div>
                    </td>
                    <td>
                        <span class="text-center">{{ number_format($item->price, 0, ',', '.') }}đ</span>
                    </td>

                    <td>
                        <p class="text-muted mb-0">{{$item->category_id}}</p>
                    </td>
                    <td>
                        <span class="text-muted">{{$item->quantity}}</span>
                    </td>
                    <td colspan="" class="w-25">{{ substr(strip_tags($item->content), 0, 40) }}</td>
                    <td>
                        <a array="{{$item}}" id="{{$item->id}}" class="editproduct btn btn-link">Sửa</a>
                        <a class="btn btn-link" href="{{route('admin.product.delete',['id'=>$item->id])}}" data-mdb-ripple-color="dark" onclick="return confirm('Bạn có muốn xoá ?')">Xóa</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="modal fade" id="modalinsert">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <legend>Thêm sản phẩm</legend>
                </div>
                <div class="modal-body">
                    <form action="{{route('admin.product.add')}}" method="post" role="form" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label for="inputCity">Tên</label>
                                <input type="text" class="form-control col-sm-10" id="name" name="name" value="" onblur="checkname()" ; Required />

                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputState">Loại sản phẩm</label>
                                <select id="category_id" name="category_id" class="form-control col-sm-10">
                                    @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-2">
                                <label for="inputCity">Số lượng</label>
                                <input type="number" class="form-control col-sm-10" id="quantity" name="quantity" value="{{old('quantity')}}" onblur="checkQuantity();" Required>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputState">Giá</label>
                                <input type="number" class="form-control col-sm-10" id="price" name="price" value="{{old('price')}}" onblur="checkPrice();" Required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputCity">Ảnh chính</label>
                                <input type="file" class="" id="mainImage" name="mainImage" accept="image/png, image/gif, image/jpeg" onchange="checkImageMain();" value="" Required>

                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputState">Ảnh phụ</label>
                                <input type="file" class="" id="secondImage" name="secondImage" accept="image/png, image/gif, image/jpeg" onchange="checkImageSecond();" value="" Required>

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputCity">Mô tả</label>
                            <textarea class="form-control" id="editor" name="content" value="">{{old('content')}}</textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                            <button type="submit" name="insert" class="btn btn-primary">Thêm</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Update -->
    <div class="modal fade" id="modalupdate">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <legend>Sửa sản phẩm</legend>
                </div>
                <div class="modal-body">
                    <form action="{{route('admin.product.edit')}}" method="post" role="form" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-2 p-0">
                                <label for="inputCity">id</label>
                                <input type="number" class="form-control" id="eid" name="id" readonly="">
                            </div>
                            <div class="form-group col-md-7">
                                <label for="inputCity">Tên sản phẩm</label>
                                <input type="text" class="form-control" id="ename" name="name" value="" onblur="checkname()" ; Required />
                            </div>

                            <div class="form-group col-md-3">
                                <label for="inputState">Loại sản phẩm</label>
                                <select id="ecategory_id" name="category_id" class="form-control">
                                    @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-2">
                                <label for="inputCity">Số lượng</label>
                                <input type="number" class="form-control" id="equantity" name="quantity" value="" onblur="checkQuantity();" Required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputState">Giá</label>
                                <input type="number" class="form-control" id="eprice" name="price" value="" onblur="checkPrice();" Required>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputCity" id="nameMainImage">Ảnh chính</label>
                                <input type="file" class="form-control btn" id="mainImage" name="mainImage"  accept="image/png, image/gif, image/jpeg" onchange="checkImageMain();" value="hhh">

                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputState" id="nameSecondImage">Ảnh phụ</label>
                                <input type="file" class="form-control btn" id="secondImage" name="secondImage" accept="image/png, image/gif, image/jpeg" onchange="checkImageSecond();" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputCity">Mô tả</label>
                            <textarea class="form-control ckeditor" id="editor1" name="content" value=""></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary " id="modalupdateBtn" data-dismiss="modal">Đóng</button>
                            <button type="submit" name="insert" class="btn btn-primary">Lưu</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Ckeditor -->
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ),{
                ckfinder: {
                    uploadUrl: "{{route('image.upload').'?_token='.csrf_token()}}",
                }
            })
            .catch( error => {
                console.error( error );
            } );
    </script>
    <script>
    
</script>

    @endsection