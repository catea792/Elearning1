@extends('main')
@section('profile')

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <div class="container" style="margin: 3% auto">
        <div class="home">
            <p style="font-size: 18px; margin-top: 1%; margin-bottom: 3%"><a href="{{route('home')}}"><i class="fas fa-home"></i>Trang chủ</a> > Profile</p>
        </div>
        <div class="row">
            <div class="col-md-3 ">
                <div class="list-group ">
                    <a href="{{route('profile')}}" class="list-group-item list-group-item-action active">PROFILE</a>
                    <a href="{{route('update_profile')}}" class="list-group-item list-group-item-action">Cập nhật thông tin</a>
                    <a href="{{route('change_password')}}" class="list-group-item list-group-item-action">Thay đổi mật khẩu</a>
                    <a href="{{route('history')}}" class="list-group-item list-group-item-action">Lịch sử khóa học</a>
                    <a href="#" class="list-group-item list-group-item-action">Các khóa học đã học</a>
                </div>
            </div>
            @if(isset(auth()->user()->username))
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4>Your Profile</h4>
                                    <hr>
                                </div>
                            </div>
                            @if(auth()->user()->role == "student")
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label for="username" class="col-4 col-form-label">Tài khoản </label>
                                            <div class="col-8">
                                                <input class="form-control here" type="text" value="<?php if (isset(auth()->user()->username)) {
                                                    echo auth()->user()->username;
                                                }?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="username" class="col-4 col-form-label">Email </label>
                                            <div class="col-8">
                                                <input class="form-control here" type="text" value="<?php if (!empty(auth()->user()->email)) {
                                                    echo auth()->user()->email;
                                                }?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="username" class="col-4 col-form-label">Phone </label>
                                            <div class="col-8">
                                                <input class="form-control here" type="text" value="<?php if (!empty(auth()->user()->phone)) {
                                                    echo auth()->user()->phone;
                                                }?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="name" class="col-4 col-form-label">Họ tên đệm</label>
                                            <div class="col-8">
                                                <input id="name" class="form-control here" value=" <?php ($data = DB::table('students')->where('email', auth()->user()->email)->value('first_name')); echo $data;?>" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="lastname" class="col-4 col-form-label">Tên</label>
                                            <div class="col-8">
                                                <input id="lastname" value=" <?php ($data = DB::table('students')->where('email', auth()->user()->email)->value('last_name')); echo $data;?>" class="form-control here" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="text" class="col-4 col-form-label">Tuổi </label>
                                            <div class="col-8">
                                                <input id="text" class="form-control here" value=" <?php ($data = DB::table('students')->where('email', auth()->user()->email)->value('age')); echo $data;?>" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="text" class="col-4 col-form-label">Học vấn </label>
                                            <div class="col-8">
                                                <input id="text" class="form-control here" value=" <?php ($data = DB::table('students')->where('email', auth()->user()->email)->value('level')); echo $data;?>" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="text" class="col-4 col-form-label"> Các chứng chỉ</label>
                                            <div class="col-8">
                                                <input id="text" placeholder="Chưa có" class="form-control here"  value="" type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if(auth()->user()->role == "lecture")
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <div class="col-4">Ảnh đại diện </div>
                                            <div class="col-8">
                                                <?php $data = DB::table('lectures')
                                                    ->where('email','=',auth()->user()->email)->get()->first();
                                                ?>
                                                <img src="/lecture/{{$data->avatar}}" alt="Ảnh đại diện" style="width: 30%; height: auto">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="username" class="col-4 col-form-label">Tài khoản </label>
                                            <div class="col-8">
                                                <input class="form-control here" type="text" value="<?php if (isset(auth()->user()->username)) {
                                                    echo auth()->user()->username;
                                                }?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="username" class="col-4 col-form-label">Email </label>
                                            <div class="col-8">
                                                <input class="form-control here" type="text" value="<?php if (!empty(auth()->user()->email)) {
                                                    echo auth()->user()->email;
                                                }?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="username" class="col-4 col-form-label">Phone </label>
                                            <div class="col-8">
                                                <input class="form-control here" type="text" value="<?php if (!empty(auth()->user()->phone)) {
                                                    echo auth()->user()->phone;
                                                }?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="name" class="col-4 col-form-label">Họ tên đệm</label>
                                            <div class="col-8">
                                                <input id="name" class="form-control here" value=" <?php ($data = DB::table('lectures')->where('email', auth()->user()->email)->value('first_name')); echo $data;?>" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="lastname" class="col-4 col-form-label">Tên</label>
                                            <div class="col-8">
                                                <input id="lastname" value=" <?php ($data = DB::table('lectures')->where('email', auth()->user()->email)->value('last_name')); echo $data;?>" class="form-control here" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="text" class="col-4 col-form-label">Tuổi </label>
                                            <div class="col-8">
                                                <input id="text" class="form-control here" value=" <?php ($data = DB::table('lectures')->where('email', auth()->user()->email)->value('age')); echo $data;?>" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="text" class="col-4 col-form-label">Học vấn </label>
                                            <div class="col-8">
                                                <input id="text" class="form-control here" value=" <?php ($data = DB::table('lectures')->where('email', auth()->user()->email)->value('degree')); echo $data;?>" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="text" class="col-4 col-form-label">Khối giảng dạy </label>
                                            <div class="col-8">
                                                <input id="text" class="form-control here" value=" <?php ($data = DB::table('lectures')->where('email', auth()->user()->email)->value('level_name')); echo $data;?>" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="text" class="col-4 col-form-label">Trường tốt nghiệp</label>
                                            <div class="col-8">
                                                <input id="text" class="form-control here" value=" <?php ($data = DB::table('lectures')->where('email', auth()->user()->email)->value('university')); echo $data;?>" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="text" class="col-4 col-form-label">Nơi công tác </label>
                                            <div class="col-8">
                                                <input id="text" class="form-control here" value=" <?php ($data = DB::table('lectures')->where('email', auth()->user()->email)->value('work_address')); echo $data;?>" type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endif

        </div>
    </div>
@endsection

