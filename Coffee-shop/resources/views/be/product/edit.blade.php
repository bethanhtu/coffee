@extends('be.layout')
@section('content')
    <div class="col-lg-12">
        <div class="d-flex my-4 justify-content-between">
            <h2 class=""> SỬA THÔNG TIN SẢN PHẨM</h2>
            
        </div>

        <form action="{{route('admin.product.edit')}}"  method="post"   role="form" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <label for="" class="col-sm-2">ID</label> <span id="eid"></span>
                <input type="text" class="form-control col-sm-10"  id="id" name="id" value="{{$product->id}}"  readonly />
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2">Tên</label> <span id="errorname"></span>
                <input type="text" class="form-control col-sm-10"  id="name" name="name" value="{{$product->name}}" onblur="checkname()"; Required />
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2">Loại sản phẩm</label>
                <select  id="category_id" name="category_id" class="form-control col-sm-10" >
                    @foreach($categories as $category)
                        <option <?php if ($category->id == $product->category_id) {
                            echo "selected=selected";
                        } ?> value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2">Xuất xứ</label> <span id="errororigin"></span>
                <input type="text" class="form-control col-sm-10" id="origin" name="origin"  value="{{$product->origin}}" onblur="checkOrigin();" Required>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2">Ảnh chính</label><span id="errormain"></span>
                <img width="40px" src="{{asset($product->main_image)}}">
                <input type="file" class="" id="mainImage" name="mainImage"  accept="image/png, image/gif, image/jpeg" onchange="checkImageMain();" placeholder="{{$product->main_image}}">
            </div>

            <div class="form-group row">
                <label for="" class="col-sm-2">Ảnh phụ</label><span id="errorsecond"></span>
                <img width="40px" src="{{asset($product->main_image)}}">
                <input type="file" class="" id="secondImage" name="secondImage" accept="image/png, image/gif, image/jpeg" onchange="checkImageSecond();" placeholder="{{$product->main_image}}">
            </div>

            <div class="form-group row">
                <label for="" class="col-sm-2">Giá</label> <span id="errorprice"></span>
                <input type="number" class="form-control col-sm-10" id="price" name="price"  value="{{$product->price}}" onblur="checkPrice();" Required>
            </div>

            <div class="form-group row">
                <label for="" class="col-sm-2">Số lượng</label> <span id="errorquantity"></span>
                <input type="number" class="form-control col-sm-10" id="quantity" name="quantity"  value="{{$product->quantity}}" onblur="checkQuantity();" Required>
            </div>

            <div class="form-group row">
                <label for="" class="col-sm-2">Mô tả</label>
                <textarea  class="form-control ckeditor" id="editor" name="content"  value="">{{$product->content}}</textarea>
            </div>
            <div class="">
              <button type="submit"  name="insert" class="btn btn-sm btn-primary">Lưu</button>
            </div>
        </form>
    </div>
@endsection