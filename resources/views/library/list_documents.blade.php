@extends('main')
@section('list-documents')
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
            <p style="font-size: 18px; margin-top: 1%; margin-bottom: 3%"><a href="{{route('home')}}"><i class="fas fa-home"></i>Trang chủ</a>
                > Danh sách tài liệu</p>
        </div>
        <div class="row">
            <div class="col-md-3 ">
                <div class="list-group ">
                    <p class="list-group-item list-group-item-action bg-success text-white ">Quản lí tài liệu</p>
                    <a href="{{route('list_documents')}}" class="list-group-item list-group-item-action active ">Danh sách tài liệu</a>
                    <a href="{{route('upload_documents')}}" class="list-group-item list-group-item-action ">Thêm mới</a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h4>Danh sách tài liệu</h4>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            @if(isset($list_documents))
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th class="text-center">Mã tài liệu</th>
                                        <th class="text-center">Khối lớp</th>
                                        <th class="text-center">Tên môn học</th>
                                        <th class="text-center">Tiêu đề</th>
                                        <th class="text-center">xem</th>
                                        <th class="text-center">Chỉnh sửa</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(count($list_documents) > 0)
                                        @foreach($list_documents as $list)
                                            <tr>
                                                <td class="text-center">{{ $list->document_id }}</td>
                                                <td class="text-center">{{ $list->grade }}</td>
                                                <td class="text-center">{{ $list->subject_name }}</td>
                                                <td class="text-center">{{ $list->title }}</td>
                                                <td class="text-center"><a href="{{route('documents_views_detail',$list->slug)}}"><i class="fas fa-eye"></i></a></td>
                                                <td class="text-center"><a href="{{route('update_documents',$list->document_id)}}"><i class="fas fa-pen-alt"></i></a></td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr><td>No result found!</td></tr>
                                    @endif
                                    </tbody>
                                </table>
                            @endif
                                {{$list_documents->links()}}
                        </div>

                        <div class="row">
                            <div class="col-5">
                            </div>
                            <div class="col-2 upload">
                                <a href="{{route('upload_documents')}}">Thêm mới</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
