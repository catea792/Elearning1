@extends('main')
@section('change_password')
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <div class="container" style="margin: 10% auto">
        <div class="home">
            <p style="font-size: 18px; margin-top: 1%; margin-bottom: 3%"><a href="{{route('home')}}"><i class="fas fa-home"></i>Trang chủ</a> > Profile</p>
        </div>
        <div class="row">
            <div class="col-md-3 ">
                <div class="list-group ">
                    <a href="{{route('profile')}}" class="list-group-item list-group-item-action">PROFILE</a>
                    <a href="{{route('update_profile')}}" class="list-group-item list-group-item-action ">Cập nhật thông tin</a>
                    <a href="{{route('change_password')}}" class="list-group-item list-group-item-action active">Thay đổi mật khẩu</a>
                    <a href="{{route('history')}}" class="list-group-item list-group-item-action">Lịch sử khóa học</a>
                    <a href="#" class="list-group-item list-group-item-action">Các khóa học đã học</a>

                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h4>Thay đổi mật khẩu</h4>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <form action="{{route('update_password')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @if(session('error'))
                                        <div class="alert alert-danger">
                                            {{session('error')}}
                                        </div>
                                    @endif
                                    @if(session('success'))
                                        <div class="alert alert-success">
                                            {{session('success')}}
                                        </div>
                                    @endif
                                    <div class="input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                                        </div>
                                        <input type="password" class="form-control" placeholder="Mật khẩu cũ" name="old_password">
                                        <span style="color: red">@error('old_password'){{$message}}@enderror</span>
                                    </div>
                                    <div class="input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                                        </div>
                                        <input type="password" class="form-control" placeholder="Mật khẩu mới" name="new_password">
                                        <span style="color: red">@error('new_password'){{$message}}@enderror</span>
                                    </div>
                                    <div class="input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                                        </div>
                                        <input type="password" class="form-control" placeholder="Xác nhận mật khẩu" name="confirm_password">
                                        <span style="color: red">@error('confirm_password'){{$message}}@enderror</span>
                                    </div>
                                    <div class="form-group">
                                        <div class="offset-4 col-8" style="margin-top:1% ">
                                            <button name="submit" type="submit" class="btn btn-primary">Đổi mật khẩu</button>
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

