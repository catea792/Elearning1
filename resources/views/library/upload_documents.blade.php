@extends('main')
@section('upload-documents')
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <div class="container" style="margin-top: 5%; margin-bottom: 5%">
        <div class="home">
            <p style="font-size: 18px; margin-top: 1%; margin-bottom: 3%"><a href="{{route('home')}}"><i class="fas fa-home"></i>Trang chủ</a>
                >
                <a href="{{route('list_documents')}}}">Tài liệu</a>
                > Thêm tài liệu</p>
        </div>
        <div class="row">
            <div class="col-md-3 ">
                <div class="list-group ">
                    <p class="list-group-item list-group-item-action bg-success text-white ">Quản lí tài liệu</p>
                    <a href="{{route('list_documents')}}" class="list-group-item list-group-item-action  ">Danh sách tài liệu</a>
                    <a href="{{route('upload_documents')}}" class="list-group-item list-group-item-action active">Thêm mới</a>

                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h4>Tải lên tài liệu</h4>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <form action="{{route('post_upload_documents')}}" method="post" enctype="multipart/form-data">
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
                                        <label for="subject_name" class="col-4 col-form-label">Tên môn học</label>
                                        <div class="col-8">
                                            <select  name="subject_name"  class="custom-select">
                                                <option value=""></option>
                                                <option value="Toán">Toán</option>
                                                <option value="Vật lý">Vật lý</option>
                                                <option value="Hóa Học">Hóa học</option>
                                                <option value="Văn">Văn</option>
                                                <option value="Tiếng anh">Tiếng anh</option>
                                            </select>
                                            <span style="color: red">@error('subject_name'){{$message}}@enderror</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="document_id" class="col-4 col-form-label">Mã tài liệu</label>
                                        <div class="col-8">
                                            <input name="document_id" class="form-control here" type="text">
                                            <span style="color: red">@error('document_id'){{$message}}@enderror</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="grade" class="col-4 col-form-label">Khối lớp</label>
                                        <div class="col-8">
                                            <input name="grade" class="form-control here" type="text">
                                            <span style="color: red">@error('grade'){{$message}}@enderror</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="title" class="col-4 col-form-label">Tiêu đề</label>
                                        <div class="col-8">
                                            <input name="title" class="form-control here" type="text">
                                            <span style="color: red">@error('title'){{$message}}@enderror</span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="author" class="col-4 col-form-label">Tác giả</label>
                                        <div class="col-8">
                                            <input  name="author" class="form-control here" type="text" >
                                            <span style="color: red">@error('author'){{$message}}@enderror</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="slug" class="col-4 col-form-label">Link tài liệu</label>
                                        <div class="col-8">
                                            <input  name="slug" class="form-control here" type="text" >
                                            <span style="color: red">@error('slug'){{$message}}@enderror</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="custom-file ">
                                            <label for="content" class="col-4 col-form-label">Chọn tài liệu</label>
                                            <input type="file" name="content" >
                                            <span style="color: red">@error('content'){{$message}}@enderror</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-4 col-8" style="margin-top:1% ">
                                            <button name="submit" type="submit" class="btn btn-primary">Tải lên</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
