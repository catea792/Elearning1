@extends('main')
@section('update-documents')
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <?php use Illuminate\Support\Facades ?>
    <div class="container" style="margin-top: 5%; margin-bottom: 5%">
        <div class="home">
            <p style="font-size: 18px; margin-top: 1%; margin-bottom: 3%"><a href="{{route('home')}}"><i class="fas fa-home"></i>Trang chủ</a> > Cập nhật tài liệu</p>
        </div>
        <div class="row">
            <div class="col-md-3 ">
                <div class="list-group ">
                    <p class="list-group-item list-group-item-action bg-success text-white ">Quản lí tài liệu</p>
                    <a href="{{route('list_documents')}}" class="list-group-item list-group-item-action  ">Danh sách tài liệu</a>
                    <a href="{{route('upload_documents')}}" class="list-group-item list-group-item-action ">Thêm mới</a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h4>Cập nhật tài liệu</h4>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            @if(session('error'))
                                <div class="alert alert-danger">
                                    {{session('error')}}
                                </div>
                            @endif
                            @if(isset($result))
                                <div class="col-md-12" >
                                    <form action="{{route('post_update_documents')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @if(session('success'))
                                            <div class="alert alert-success">
                                                {{session('success')}}
                                            </div>
                                        @endif
                                        @if(session('error'))
                                            <div class="alert alert-danger">
                                                {{session('error')}}
                                            </div>
                                        @endif
                                        <div class="form-group row">
                                            <label for="subject_name" class="col-4 col-form-label">Tên môn học <span style="color: red">(* không thay thôi)</span></label>
                                            <div class="col-8">
                                                <input class="form-control here" name="subject_name" value="{{$result->subject_name}}" type="text">
                                                <span style="color: red">@error('subject_name'){{$message}}@enderror</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="document_id" class="col-4 col-form-label">Mã tài liệu <span style="color: red">(* không thay đổi)</span></label>
                                            <div class="col-8">
                                                <input class="form-control here" name="document_id" value="{{$result->document_id}}" type="text">
                                                <span style="color: red">@error('document_id'){{$message}}@enderror</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="grade" class="col-4 col-form-label">Khối lớp </label>
                                            <div class="col-8">
                                                <input class="form-control here" name="grade" value="{{$result->grade}}" type="text">
                                                <span style="color: red">@error('grade'){{$message}}@enderror</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="title" class="col-4 col-form-label">Tiêu đề </label>
                                            <div class="col-8">
                                                <input  name="title" class="form-control here" value="{{$result->title}}" type="text">
                                                <span style="color: red">@error('title'){{$message}}@enderror</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="title" class="col-4 col-form-label">Tài liệu hiện tại </label>
                                            <div class="col-8">
                                                <input name="current_content" class="form-control here" value="{{$result->content}}" type="text">
                                                <span style="color: red">@error('current_content'){{$message}}@enderror</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="custom-file ">
                                                <label for="upload_content" class="col-4 col-form-label">Chọn tài liệu</label>
                                                <input type="file" name="upload_content" >
                                                <span style="color: red">@error('upload_content'){{$message}}@enderror</span>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="author" class="col-4 col-form-label">Tác giả</label>
                                            <div class="col-8">
                                                <input  name="author" placeholder="Mô tả" class="form-control here" value="{{$result->author}}" type="text" >
                                                <span style="color: red">@error('author'){{$message}}@enderror</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="slug" class="col-4 col-form-label">Link tài liệu</label>
                                            <div class="col-8">
                                                <input  name="slug" class="form-control here" value="{{$result->slug}}" type="text">
                                                <span style="color: red">@error('slug'){{$message}}@enderror</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-4 col-8" style="margin-top:1% ">
                                                <button name="submit" type="submit" class="btn btn-primary">Cập nhật</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script>
</script>
@stop

