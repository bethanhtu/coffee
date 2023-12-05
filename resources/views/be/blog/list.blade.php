@extends('be.layout')
@section('content')
<div class="col-lg-12">
    <div class="d-flex justify-content-between">
        <h2 class="text-primary font-weight-bold">Bài viết</h2>
        <!-- <button class="btn btn-link" data-toggle="modal" data-target="#modalinsert">Thêm</button> -->
        <a class="btn btn-link" href="{{route('admin.blog.doAdd')}}">Thêm</a>
    </div>
    <div>
        <hr>
    </div>
    @foreach($list as $item)
    <div class="mb-3 d-flex">
        <img width="200" src="{{asset($item->main_image)}}" alt="Card image cap">
        <div class="d-flex flex-column justify-content-between px-2">
            <h4 class="font-weight-bold text-primary">{{$item->title}}</h4>
            <div class="overflow-hidden" style="height: 90px;">{!! $item->content !!}</div>
            <p class="card-text"><small class="text-muted">Cập nhật lần cuối: {{ \Carbon\Carbon::parse($item->update_at)->format('d/m/Y') }}</small></p>
        </div>
        <div class="d-flex align-items-center px-2">
            <div>
                <!-- <a array="{{$item}}" id="{{$item->id}}" class="editproduct btn btn-link">Sửa</a> -->
                <a class="btn btn-link" href="{{route('admin.blog.doEdit',['id'=>$item->id])}}">Sửa</a>
                <a class="btn btn-link" href="{{route('admin.blog.delete',['id'=>$item->id])}}" data-mdb-ripple-color="dark" onclick="return confirm('Bạn có muốn xoá ?')">Xóa</a>
            </div>
        </div>
    </div>
    @endforeach
    <!-- <div class="modal fade" id="modalinsert">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <legend>Thêm</legend>
                </div>
                <div class="modal-body">
                    <form action="{{route('admin.blog.add')}}" method="post" role="form" enctype="multipart/form-data">
                        @csrf
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
    </div> -->
   <!-- Update -->
    <!-- <div class="modal fade" id="modalupdate">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <legend>Sửa</legend>
                </div>
                <div class="modal-body">
                    <form action="{{route('admin.blog.edit')}}" method="post" role="form" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-2 p-0">
                                <label for="inputCity">id</label>
                                <input type="number" class="form-control" id="eid" name="id" readonly="">
                            </div>
                            <div class="form-group col-md-10">
                                <label for="inputCity">Tiêu đề</label>
                                <input type="text" class="form-control" id="etitle" name="title" value="" onblur="checkname()" ; Required />
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
    </div> -->
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
    <script>

    </script>

    @endsection