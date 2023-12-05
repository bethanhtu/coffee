@extends('be.layout')
@section('content')
<div class="my-2">
    <a href="{{ url()->previous() }}"><i class="fas fa-arrow-left mr-2"></i>Trở lại</a>
</div>
<form action="{{route('admin.blog.add')}}" method="post" role="form" enctype="multipart/form-data">
    @csrf
    <div class="d-flex justify-content-between">
        <h2 class="text-primary font-weight-bold">Thêm bài viết</h2>
        <div>
            <button type="submit" name="insert" class="btn btn-primary">Thêm</button>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="inputCity">Tên</label>
            <input type="text" class="form-control col-sm-12" id="title" name="title" value="" onblur="checkname()" ; Required />

        </div>
    </div>
    <div class="form-row">
        <div class="form-group">
            <label for="inputCity">Ảnh</label>
            <input type="file" class=" col-md-12" id="mainImage" name="mainImage" accept="image/png, image/gif, image/jpeg" onchange="checkImageMain();" value="" Required>
        </div>

    </div>
    <div class="form-group">
        <label for="inputCity">Nội dung</label>
        <textarea class="form-control ckeditor" id="editor" name="content" value=""></textarea>
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