@extends('main')
@section('lesson-views-detail')
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/7lhh21x70bfeyw5l6x9xkk3rsavnqygptzsfy10wzzu29y2v/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '.textarea',
            plugins: 'a11ychecker advcode casechange export formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
            toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter pageembed permanentpen table',
            toolbar_mode: 'floating',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
        });
    </script>
    <div class="container" style="margin-top: 5%; margin-bottom: 5%">
        <div class="home">
            <p style="font-size: 18px; margin-top: 1%; margin-bottom: 3%"><a href="{{route('home')}}"><i class="fas fa-home"></i>Trang chủ</a> > Cập nhật khóa học</p>
        </div>
        <div class="row">
            <div class="col-md-3 ">
                <div class="list-group ">
                    <p class="list-group-item list-group-item-action bg-success text-white ">Quản lí khóa học</p>
                    <a href="{{route('list_course')}}" class="list-group-item list-group-item-action ">Danh sách khóa học</a>
                    <a href="{{route('list_lesson')}}" class="list-group-item list-group-item-action ">Danh sách bài giảng</a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h4>Chi tiết bài giảng</h4>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            @if(session('error'))
                                <div class="alert alert-danger">
                                    {{session('error')}}
                                </div>
                            @endif
                            @if(isset($lesson))
                                <div class="col-md-12" >
                                    <form >
                                        <div class="form-group row">
                                            <label for="course_name" class="col-4 col-form-label">Mã khóa học </label>
                                            <div class="col-8">
                                                <input class="form-control here" value="{{$lesson->course_id}}" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="subject_id" class="col-4 col-form-label">Mã môn học </label>
                                            <div class="col-8">
                                                <input class="form-control here" value="{{$lesson->subject_id}}" type="text">

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="lesson_name" class="col-4 col-form-label">Tên bài giảng</label>
                                            <div class="col-8">
                                                <input  class="form-control here" value="{{$lesson->lesson_name}}" type="text">

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="lesson_id" class="col-4 col-form-label">Thứ tự bài học</label>
                                            <div class="col-8">
                                                <input class="form-control here" value="{{$lesson->lesson_id}}" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="slug" class="col-4 col-form-label">Liên kết</label>
                                            <div class="col-8">
                                                <input class="form-control here" value="{{$lesson->slug}}" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="video" class="col-4 col-form-label">Video</label>
                                            <div class="col-8">
                                                <input class="form-control here" value="{{$lesson->video}}" type="text">
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

@stop


