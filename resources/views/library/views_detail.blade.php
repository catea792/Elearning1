@extends('main')
@section('documents-views-detail')
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <div class="container" style="margin-top: 5%; margin-bottom: 5%">
        <div class="home">
            <p style="font-size: 18px; margin-top: 1%; margin-bottom: 3%"><a href="{{route('home')}}"><i class="fas fa-home"></i>Trang chủ</a>
                >
                <a href="{{route('list_documents')}}">Tài liệu</a>
                > Chi tiết tài liệu</p>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <h4>Chi tiết</h4>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    @if(isset($result))
                        <div class="col-md-12" >
                            <div class="form-group row">
                                <label for="subject_name" class="col-2 col-form-label">Tên môn học </label>
                                <div class="col-10">
                                    <input class="form-control here" value="{{$result->subject_name}}" type="text">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="document_id" class="col-2 col-form-label">Mã tài liệu</label>
                                <div class="col-10">
                                    <input class="form-control here" value="{{$result->document_id}}" type="text">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="grade" class="col-2 col-form-label">Khối lớp </label>
                                <div class="col-10">
                                    <input class="form-control here" value="{{$result->grade}}" type="text">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="title" class="col-2 col-form-label">Tiêu đề </label>
                                <div class="col-10">
                                    <input class="form-control here" value="{{$result->title}}" type="text">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="title" class="col-2 col-form-label">Tài liệu </label>
                                <div class="col-10">
                                    <input class="form-control here" value="{{$result->content}}" type="text">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="author" class="col-2 col-form-label">Tác giả</label>
                                <div class="col-10">
                                    <input class="form-control here" value="{{$result->author}}" type="text" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="slug" class="col-2 col-form-label">Link tài liệu</label>
                                <div class="col-10">
                                    <input class="form-control here" value="{{$result->slug}}" type="text">
                                </div>
                            </div>
                        </div>
                    @endif
                </div>

            </div>
        </div>
    </div>
@stop

