@extends('be.layout')
@section('content')
<div class="my-2">
    <a href="{{ url()->previous() }}"><i class="fas fa-arrow-left mr-2"></i>Trở lại</a>
</div>
<form action="{{route('admin.blog.edit')}}" method="post" role="form" enctype="multipart/form-data">
    @csrf
    <div class="d-flex justify-content-between">
        <h2 class="text-primary font-weight-bold">Sửa bài viết</h2>
        <div>
            <button type="submit" name="insert" class="btn btn-primary"><i class="fas fa-save mr-1"></i>Lưu</button>
        </div>
    </div>

    <div class="form-row">
        <div class="d-none">
            <label for="inputCity">id</label>
            <input type="number" class="" id="eid" name="id" value="{{$blogs->id}}" readonly>
        </div>
        <div class="form-group col-md-12">
            <label for="inputCity">Tiêu đề</label>
            <input type="text" class="form-control" id="etitle" name="title" value="{{$blogs->title}}" onblur="checkname()" ; Required />
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="inputCity" id="nameMainImage">Ảnh</label>
            <input type="file" class="form-control btn" id="mainImage" name="mainImage" accept="image/png, image/gif, image/jpeg" onchange="checkImageMain();" value="hhh">
        </div>
    </div>
    <div class="form-group">
        <label for="inputCity">Mô tả</label>
        <textarea class="form-control ckeditor" id="editor" name="content" value="">{{$blogs->content}}</textarea>
    </div>
</form>

<!-- Ckeditor -->
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

@endsection