@extends('main')
@section('list-course-question')
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        .upload a{
            text-decoration: none;
            padding: 10px;
            background-color: dodgerblue;
            color: white;
        }
    </style>
    <div class="container" style="margin-top: 5%; margin-bottom: 5%">
        <div class="home">
            <p style="font-size: 18px; margin-top: 1%; margin-bottom: 3%">
                <a href="{{route('home')}}"><i class="fas fa-home"></i>Trang chủ</a>
                >
                <a href="{{route('list_course')}}">Khóa học</a>
                > Danh sách bài kiểm tra
            </p>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h4>Danh sách câu hỏi kiểm tra cuối khóa học</h4>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
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
                            @if(isset($list_question))
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th class="col-md-1 text-center">Câu</th>
                                        <th class="col-md-5 text-center">Câu hỏi</th>
                                        <th class="col-md-1 text-center">Điểm</th>
                                        <th class="col-md-1 text-center">Xem</th>
                                        <th class="col-md-1 text-center">Chỉnh sửa</th>
                                        <th class="col-md-1 text-center">Xóa</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(count($list_question) > 0)
                                        @foreach($list_question as $list)
                                            <tr>
                                                <td class="text-center">{{ $list->id }}</td>
                                                <td class="text-center">{{ $list->question }}</td>
                                                <td class="text-center">{{ $list->point }}</td>
                                                <td class="text-center"><a href="{{route('views_question_detail',[$list->course_id,$list->id])}}"><i class="fas fa-eye"></i></a></td>
                                                <td class="text-center"><a href="{{route('update_question',[$list->course_id,$list->id])}}"><i class="fas fa-pen-alt"></i></a></td>
                                                <td class="text-center"><a href=""><i class="fas fa-trash-alt"></i></a></td>
                                            </tr>
                                        @endforeach
                                    @endif
                                    </tbody>
                                </table>
                            @endif
                        </div>
                        <div class="row">
                            <div class="col-5">
                            </div>
                            <div class="col-2 upload">
                                <a href="{{route('create_question',$course_id)}}">Thêm mới</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop


