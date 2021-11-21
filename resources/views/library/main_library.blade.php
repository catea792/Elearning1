
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/home.css" type="text/css" media="all">
    <link rel="stylesheet" href="/css/main.css" type="text/css" media="all">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/fontawesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <title>Bách Khoa E-learning</title>
    <style>
        .body .container .menu{
            margin: 2% auto;
        }
        .body .container .menu p{
            font-size: large;
        }
        .body .container .menu p a{
            text-decoration: none;
        }
        .body .container .menu p a:hover
        {
            color: red;
        }
    </style>
</head>
<body>
<div class="header">
    <div class="header header-top" >
        <div class="logo">
            <a href="{{route('home')}}">
                <img src="/image/logo1.png" alt="Logo">
            </a>
        </div>
        <div class="search">
            <form action="">
                <input type="text" placeholder="Tìm kiếm khóa học" name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <div class="comment">
            <p>
                <i class="fas fa-graduation-cap"></i>
                Chúng tôi luôn nỗ lực vì bạn !
            </p>
        </div>
        <div class="contact">
            <i class="fas fa-phone"></i>
            | 01659673610
        </div>
        @if(\Illuminate\Support\Facades\Auth::check())
            @if(\Illuminate\Support\Facades\Auth::user()->role == "student")
                <div class="dropdown">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                        <i class="fas fa-user"></i>
                        <?php echo session()->get('username') ?>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{route('profile')}}">Profile</a>
                        <a class="dropdown-item" href="logout">Đăng xuất</a>

                    </div>
                </div>
            @endif
            @if(\Illuminate\Support\Facades\Auth::user()->role == "lecture")
                <div class="dropdown">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                        <i class="fas fa-user"></i>
                        <?php echo session()->get('username') ?>
                    </button>
                    <div class="dropdown-menu" >
                        <a class="dropdown-item" href="{{route('profile')}}">Profile</a>
                        <a class="dropdown-item" href="{{route('list_course')}}">Thông tin khóa học</a>
                        <a class="dropdown-item" href="{{route('list_documents')}}">Tải lên tài liệu</a>
                        <a class="dropdown-item" href="{{route('logout')}}">Đăng xuất</a>
                    </div>
                </div>
            @endif
        @else
            <div class="login">
                <a href="{{route('login')}}">
                    Đăng nhập
                </a>
            </div>
            <div class="register">
                <a href="{{route('register')}}">
                    Đăng ký
                </a>
            </div>
        @endif
    </div>

</div>
<div class="body">
    <div class="container">
        <div class="row">
            <div class="book" style="width: 100%; height: 400px; margin-top: 2%; margin-bottom: 2%">
                <img src="/image/sach.jpg" alt="book" style="width: 100%; height: 100%">
            </div>
        </div>
        <div class="menu">
            <p><a href="{{route('home')}}">Trang chủ</a> > Thư viện </p>
        </div>
        <div class="row">
            <div class="col-md-3 ">
                <div class="list-group ">
                    <p class="list-group-item list-group-item-action bg-success text-white " >Danh mục tài liệu học tập</p>
                    <a href="{{route('view_grade_12')}}" class="list-group-item list-group-item-action">Lớp 12</a>
                    <a href="{{route('view_grade_11')}}" class="list-group-item list-group-item-action">Lớp 11</a>
                    <a href="{{route('view_grade_10')}}" class="list-group-item list-group-item-action">Lớp 10</a>
                    <a href="{{route('view_grade_9')}}" class="list-group-item list-group-item-action">Lớp 9</a>
                    <a href="{{route('view_grade_8')}}" class="list-group-item list-group-item-action">Lớp 8</a>
                    <a href="{{route('view_grade_7')}}" class="list-group-item list-group-item-action">Lớp 7</a>
                    <a href="{{route('view_grade_6')}}" class="list-group-item list-group-item-action">Lớp 6</a>
                    <a href="{{route('view_grade_5')}}" class="list-group-item list-group-item-action">Lớp 5</a>
                    <a href="{{route('view_grade_4')}}" class="list-group-item list-group-item-action">Lớp 4</a>
                    <a href="{{route('view_grade_3')}}" class="list-group-item list-group-item-action">Lớp 3</a>
                    <a href="{{route('view_grade_2')}}" class="list-group-item list-group-item-action">Lớp 2</a>
                    <a href="{{route('view_grade_1')}}" class="list-group-item list-group-item-action">Lớp 1</a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        @yield('library_store')
                        @yield('views')
                        @yield('grade_12')
                        @yield('grade_11')
                        @yield('grade_10')
                        @yield('grade_9')
                        @yield('grade_8')
                        @yield('grade_7')
                        @yield('grade_6')
                        @yield('grade_5')
                        @yield('grade_4')
                        @yield('grade_3')
                        @yield('grade_2')
                        @yield('grade_1')
                        @yield('views-all')

                    </div>
                </div>

            </div>
        </div>
    </div>

</div>
<div class="foot-top">
    <div class="foot-child foot-info">
        <ul>
            <li><a href="">Giới thiệu</a></li>
            <li><a href="">Phòng truyền thống</a></li>
            <li><a href="">Học sinh tiêu biểu</a></li>
            <li><a href="">Điều khoản chính sách</a></li>
            <li><a href="">Quy chế hoạt động</a></li>
            <li><a href="">Chính sách bảo mật thông tin</a></li>
            <li><a href="">Giải quyết khiếu nại, tranh chấp</a></li>
            <li><a href="">Tuyển dụng</a></li>
        </ul>
    </div>
    <div class="foot-child foot-library">
        <ul>
            <li><a href="">Học tốt - Học toàn diện từ lớp 1-12</a></li>
            <li><a href="">PEN - Luyện thi đại học</a></li>
            <li><a href="">HM10 - Luyện thi vào lớp 10</a></li>
            <li><a href="">HM6 - Luyện thi vào lớp 6 CLC</a></li>
            <li><a href="">Speakup - Tiếng Anh Online 1 kèm 1</a></li>
            <li><a href="">Xiso - Trường học lập trình trực tuyến</a></li>
            <li><a href="">Học Hay - Ứng dụng học tập từ lớp 1-3</a></li>
            <li><a href="">HOCMAIBOOK - Sách hay từ lớp 1 - 12</a></li>
        </ul>
    </div>
    <div class="foot-child foot-support-study">
        <ul>
            <li><a href="">Diễn đàn học tập</a></li>
            <li><a href="">Thư viện học liệu</a></li>
            <li><a href="">Thông tin tuyển sinh ĐH</a></li>
            <li><a href="">Blog học sinh, sinh viên</a></li>
            <li><a href="">Blog giảng viên</a></li>
            <li><a href="">Kiểm tra, thi thử</a></li>
        </ul>
    </div>
    <div class="foot-child foot-user">
        <ul>
            <li><a href="">Liên hệ</a></li>
            <li><a href="">Góp ý về dịch vụ</a></li>
            <li><a href="">Giải đáp thắc mắc</a></li>
        </ul>
    </div>
    <div class="foot foot-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3724.6409443025937!2d105.84094731476287!3d21.007025286010126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1633750718987!5m2!1svi!2s"
                width="300" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

    </div>
</div>
<div class="foot-bottom">
    <p>
        Cơ quan chủ quản: Viện công nghệ thông tin và truyền thông - Đại học bách khoa hà nội<br>
        Địa điểm: Tòa nhà D9<br>
        Chịu trách nhiệm quản lí: <br>Group 10 ||   Lương Văn Minh || Nguyễn Văn Hùng || Lưu Đức Anh || Kiều Tuấn Anh
    </p>
</div>
</body>
</html>
