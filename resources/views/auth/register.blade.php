<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="/css/auth/register.css" media="all">
    <title>Đăng ký - E-learning</title>
</head>
<body>

<div class="container register">
    <div class="row">
        <div class="col-md-3 register-left">
            <img src="/image/logo.png" alt="Logo"/>
            <h3>HUST E-learning</h3>
            <p>ONE LOVE, ONE FUTURE</p>
            <a href="{{route('login')}}">
                <input type="submit" name="" value="Đăng nhập"/><br/>
            </a>
            <a href="{{route('home')}}">
                <input type="submit" name="" value="Trang chủ"/><br/>
            </a>

        </div>
        <div class="col-md-9 register-right">
            <div class="tab-content" id="myTabContent">
                <h3 class="register-heading">Đăng ký tài khoản</h3>
                <div class="row register-form">
                    <div class="col-md-12">
                        <form action="{{route('register')}}" method="post" enctype="multipart/form-data">
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
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email" value="" name="email"/>
                                <span style="color: red">@error('email'){{$message}}@enderror</span>
                            </div>
                            <div class="form-group">
                                <input type="text" minlength="10" maxlength="10" name="phone" class="form-control" placeholder="Số liên lạc" value=""  />
                                <span style="color: red">@error('phone'){{$message}}@enderror</span>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Tài khoản" value="" name="username"/>
                                <span style="color: red">@error('username'){{$message}}@enderror</span>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Mật khẩu" value="" name="password" />
                                <span style="color: red">@error('password'){{$message}}@enderror</span>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control"  placeholder="Xác nhận mật khẩu" value="" name="confirm_password"/>
                                <span style="color: red">@error('confirm_password'){{$message}}@enderror</span>
                            </div>
                            <div class="form-group align-items-center remember">
                                <input type="checkbox" name="role" id="sinhvien" value="1" > Sinh viên
                            </div>
                            <div class="form-group align-items-center remember">
                                <input type="checkbox" name="role" id="giangvien" value="2" > Giảng viên
                            </div>
                            <span style="color: red">@error('confirm_password'){{$message}}@enderror</span>
                            <div class="col-md-9">
                                <input type="submit" class="btnRegister"  value="Đăng ký"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script language="javascript">
    document.getElementById("sinhvien").checked=true;
    document.getElementById("sinhvien").onclick = function () {
        document.getElementById("sinhvien").checked = true;
        document.getElementById("giangvien").checked = false;
    };
    document.getElementById("giangvien").onclick = function () {
        document.getElementById("giangvien").checked = true;
        document.getElementById("sinhvien").checked = false;

    };
</script>
</body>
</html>




