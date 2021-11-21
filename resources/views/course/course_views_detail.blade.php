@extends('main')
@section('course-views-detail')
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'summary-ckeditor' );
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
                                <h4>Chi tiết khóa học</h4>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            @if(isset($course))
                                <div class="col-md-12" >
                                    <form>
                                        <div class="form-group row">
                                            <label for="course_name" class="col-4 col-form-label">Tên khóa học</label>
                                            <div class="col-8">
                                                <input class="form-control here" value="{{$course->course_name}}" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="subject_id" class="col-4 col-form-label">Mã môn học</label>
                                            <div class="col-8">
                                                <input class="form-control here" value="{{$course->subject_id}}" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="grade" class="col-4 col-form-label">Khối lớp</label>
                                            <div class="col-8">
                                                <input class="form-control here" value="{{$course->grade}}" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="description" class="col-4 col-form-label">Mô tả khóa học </label>
                                            <div class="col-8" >
                                                <input class="form-control here" value="{{$course->description}}" type="text">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="requirements" class="col-4 col-form-label">Yêu cầu của môn học</label>
                                            <div class="col-8" >
                                                <input class="form-control here" value="{{$course->requirements}}" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="outcomes" class="col-4 col-form-label">Kết quả đạt được</label>                                        <div class="col-8" >
                                                <input class="form-control here" value="{{$course->outcomes}}" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="slug" class="col-4 col-form-label">Liên kết</label>
                                            <div class="col-8">
                                                <input class="form-control here" value="{{$course->slug}}" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-4">Ảnh mô tả</div>
                                            <div class="col-8">
                                                <img src="/image/{{$course->des_image}}" alt="Ảnh mô tả" style="width: 100%; height: auto">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="video" class="col-4 col-form-label">Video</label>
                                            <div class="col-8">
                                                <input class="form-control here" value="{{$course->video}}" type="text" >
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

