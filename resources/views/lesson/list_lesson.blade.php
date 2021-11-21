@extends('main')
@section('list-lesson')
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
            <p style="font-size: 18px; margin-top: 1%; margin-bottom: 3%"><a href="{{route('home')}}"><i class="fas fa-home"></i>Trang chủ</a> > Danh sách khóa học</p>
        </div>
        <div class="row">
            <div class="col-md-3 ">
                <div class="list-group ">
                    <p class="list-group-item list-group-item-action bg-success text-white " >Quản lí khóa học</p>
                    <a href="{{route('list_course')}}" class="list-group-item list-group-item-action ">Danh sách khóa học</a>
                    <a href="{{route('list_lesson')}}" class="list-group-item list-group-item-action active ">Danh sách bài giảng</a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h4>Danh sách bài giảng</h4>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            @if(isset($list_lesson))
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th class="text-center">Khóa học</th>
                                        <th class="text-center">Bài học</th>
                                        <th class="text-center">Tên bài giảng</th>
                                        <th class="text-center">Test</th>
                                        <th class="text-center">Xem</th>
                                        <th class="text-center">Chỉnh sửa</th>
                                        <th class="text-center">Xóa</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(count($list_lesson) > 0)
                                        @foreach($list_lesson as $list)
                                            <tr>
                                                <td class="text-center">{{ $list->course_name }}</td>
                                                <td class="text-center">{{ $list->lesson_id }}</td>
                                                <td class="text-center">{{ $list->lesson_name }}</td>
                                                <td class="text-center"><a href="{{route('lesson_list_question', [$list->course_id, $list->lesson_id])}}"><i class="fas fa-file-alt"></i></a></td>
                                                <td class="text-center"><a href="{{route('lesson_views_detail',$list->slug)}}"><i class="fas fa-eye"></i></a></td>
                                                <td class="text-center"><a href="{{route('update_lesson',$list->slug)}}"><i class="fas fa-pen-alt"></i></a></td>
                                                <td class="text-center"><a href=""><i class="fas fa-trash-alt"></i></a></td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr><td>No result found!</td></tr>
                                    @endif
                                    </tbody>
                                </table>
                            @endif
                        </div>
                        <div class="row">
                            <div class="col-5">
                            </div>
                            <div class="col-2">
                                {{$list_lesson->links()}}
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-5"></div>
                            <div class="col-2 upload">
                                <a href="{{route('upload_lesson')}}">Thêm mới</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop

