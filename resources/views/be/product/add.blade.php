@extends('be.layout')
@section('content')
<div class="col-lg-12">
    <h2> THÊM SẢN PHẨM</h2>
    <form action="{{route('admin.product.add')}}"  method="post"   role="form" enctype="multipart/form-data">
        @csrf
            <div class="form-group row">
                <label for="" class="col-sm-2">Tên</label> <span id="errorname"></span>
                <input type="text" class="form-control col-sm-10"  id="name" name="name"   value="{{old('name')}}" onblur="checkname()"; Required />
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2">Loại sản phẩm</label>
                <select  id="category_id" name="category_id" class="form-control col-sm-10" >
                    @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2">Xuất xứ</label> <span id="errororigin"></span>
                <input type="text" class="form-control col-sm-10" id="origin" name="origin"  value="{{old('origin')}}" onblur="checkOrigin();" Required>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2">Ảnh chính</label><span id="errormain"></span>
                <input type="file" class="" id="mainImage" name="mainImage"  accept="image/png, image/gif, image/jpeg" onchange="checkImageMain();" value="" Required>
            </div>

            <div class="form-group row">
                <label for="" class="col-sm-2">Ảnh phụ</label><span id="errorsecond"></span>
                <input type="file" class="" id="secondImage" name="secondImage" accept="image/png, image/gif, image/jpeg" onchange="checkImageSecond();" value="" Required>
            </div>

            <div class="form-group row">
                <label for="" class="col-sm-2">Giá</label> <span id="errorprice"></span>
                <input type="number" class="form-control col-sm-10" id="price" name="price"  value="{{old('price')}}" onblur="checkPrice();" Required>
            </div>

            <div class="form-group row">
                <label for="" class="col-sm-2">Số lượng</label> <span id="errorquantity"></span>
                <input type="number" class="form-control col-sm-10" id="quantity" name="quantity"  value="{{old('quantity')}}" onblur="checkQuantity();" Required>
            </div>

            <div class="form-group row">
                <label for="" class="col-sm-2">Mô tả</label>
                <textarea  class="form-control ckeditor" id="editor" name="content"  value="" >{{old('content')}}</textarea>
            </div>

        <div class="footer">
            <button type="submit"  name="insert" class="btn btn-primary">Thêm</button>
        </div>
    </form>
</div>
@endsection