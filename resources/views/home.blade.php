@extends('main')
@section('home')
    <div class="header header-bottom">
        <ul>
            <li><a href="">Giới thiệu</a></li>
            <li><a href="{{route('list_lecture')}}">Giáo viên</a></li>
            <li><a href="">Phòng thi</a></li>
            <li><a href="{{route('show_library')}}">Thư viện</a></li>
            <li><a href="">Hỗ trợ</a></li>
        </ul>
    </div>
    <div class="main-content">
        <div class=" menu">
            <ul>
                <li class="title-cate">
                    <p><i class="fas fa-bars"></i>  Các khóa học</p>
                </li>
                <li class="dropdown dropright">
                    <p data-toggle="dropdown">
                        <i class="fas fa-graduation-cap"></i> Đại học - Cao đẳng
                    </p>
                    <div class="dropdown-menu">
                        <p class="text-center">KHÓA HỌC</p>
                        <div class="course">
                            <a class="dropdown-item" href="#"><i class="fas fa-calculator"></i>  Toán Cao Cấp</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-book"></i>  TOEIC</a>
                        </div>
                    </div>
                </li>
                <li class="dropdown dropright">
                    <p data-toggle="dropdown">
                        <i class="fas fa-graduation-cap"></i> Khóa học bổ trợ
                    </p>
                    <div class="dropdown-menu">
                        <p class="text-center">KHÓA HỌC</p>
                        <div class="course">
                            <a class="dropdown-item" href="#"><i class="fas fa-calculator"></i>  Toán</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-book"></i>  Văn</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-book"></i>  Tiếng Anh</a>
                        </div>

                    </div>
                </li>
                <li class="dropdown dropright">
                    <p data-toggle="dropdown">
                        <i class="fas fa-graduation-cap"></i> Bồi dưỡng học sinh giỏi
                    </p>
                    <div class="dropdown-menu" >
                        <p class="text-center">KHÓA HỌC</p>
                        <div class="course">
                            <a class="dropdown-item" href="#"><i class="fas fa-calculator"></i>  Toán</a>
                        </div>

                    </div>
                </li>
                <li class="dropdown dropright">
                    <p data-toggle="dropdown">
                        <i class="fas fa-graduation-cap"></i> Luyện thi đại học
                    </p>
                    <div class="dropdown-menu" >
                        <div class="DHBK">
                            <p class="text-center">LUYỆN THI ĐẠI HỌC BÁCH KHOA HÀ NỘI</p>
                            <div class="course">
                                <a class="dropdown-item" href="#">Tổng ôn toàn diện</a>
                                <a class="dropdown-item" href="#">Luyện đề thi đại học bách khoa hà nội</a>
                            </div>

                        </div>
                        <div class="DHQG">
                            <p class="text-center">LUYỆN THI ĐẠI HỌC QUỐC GIA HÀ NỘI</p>
                            <div class="course">
                                <a class="dropdown-item" href="#">Tổng ôn toàn diện</a>
                                <a class="dropdown-item" href="#">Luyện đề thi đại học quốc gia hà nội</a>
                            </div>
                        </div>
                        <div class="DH">
                            <p class="text-center">LUYỆN THI ĐẠI HỌC</p>
                            <div class="course">
                                <a class="dropdown-item" href="#">Tổng ôn toàn diện</a>
                                <a class="dropdown-item" href="#">Luyện đề thi đại học qua các năm</a>
                            </div>
                        </div>

                    </div>
                </li>
                <li class="dropdown dropright">
                    <p data-toggle="dropdown">
                        <i class="fas fa-graduation-cap"></i> Lớp 10 - Lớp 11 - Lớp 12
                    </p>
                    <div class="dropdown-menu" >
                        <div class="grade-10">
                            <p class="text-center">KHỐI 10</p>
                            <div class="course">
                                <a class="dropdown-item" href="#"><i class="fas fa-calculator"></i> Toán</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-book"></i> Văn</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-book"></i> Tiếng anh</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-cogs"></i> Vật Lý</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-filter"></i> Hóa Học</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-search"></i> Sinh Học</a>
                            </div>

                        </div>
                        <div class="grade-11">
                            <p class="text-center">KHỐI 11</p>
                            <div class="course">
                                <a class="dropdown-item" href="#"><i class="fas fa-calculator"></i> Toán</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-book"></i> Văn</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-book"></i> Tiếng anh</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-cogs"></i> Vật Lý</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-filter"></i> Hóa Học</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-search"></i> Sinh Học</a>
                            </div>
                        </div>
                        <div class="grade-12">
                            <p class="text-center">KHỐI 12</p>
                            <div class="course">
                                <a class="dropdown-item" href="#"><i class="fas fa-calculator"></i> Toán</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-book"></i> Văn</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-book"></i> Tiếng anh</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-cogs"></i> Vật Lý</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-filter"></i> Hóa Học</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-search"></i> Sinh Học</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="dropdown dropright">
                    <p data-toggle="dropdown">
                        <i class="fas fa-graduation-cap"></i> Luyện thi vào 10
                    </p>
                    <div class="dropdown-menu">
                        <div class="grade-10">
                            <p class="text-center">Tổng ôn</p>
                            <div class="course">
                                <a class="dropdown-item" href="#"><i class="fas fa-calculator"></i> Toán</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-book"></i> Văn</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-book"></i> Tiếng anh</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-cogs"></i> Vật Lý</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-filter"></i> Hóa Học</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-search"></i> Sinh Học</a>
                            </div>
                        </div>
                        <div class="grade-10">
                            <p class="text-center">Luyện đề</p>
                            <div class="course">
                                <a class="dropdown-item" href="#"><i class="fas fa-calculator"></i> Toán</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-book"></i> Văn</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-book"></i> Tiếng anh</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-cogs"></i> Vật Lý</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-filter"></i> Hóa Học</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-search"></i> Sinh Học</a>
                            </div>
                        </div>
                        <div class="grade-10">
                            <p class="text-center">Cấp Tốc</p>
                            <div class="course">
                                <a class="dropdown-item" href="#"><i class="fas fa-calculator"></i> Toán</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-book"></i> Văn</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-book"></i> Tiếng anh</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-cogs"></i> Vật Lý</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-filter"></i> Hóa Học</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-search"></i> Sinh Học</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="dropdown dropright">
                    <p data-toggle="dropdown">
                        <i class="fas fa-graduation-cap"></i> Lớp 6 - Lớp 7 - Lớp 8 - Lớp 9
                    </p>
                    <div class="dropdown-menu" >
                        <div class="grade-6">
                            <p class="text-center">Khối 6</p>
                            <div class="course">
                                <a class="dropdown-item" href="#"><i class="fas fa-calculator"></i> Toán</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-book"></i> Văn</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-book"></i> Tiếng anh</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-cogs"></i> Vật Lý</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-search"></i> Sinh Học</a>
                            </div>
                        </div>
                        <div class="grade-7">
                            <p class="text-center">Khối 7</p>
                            <div class="course">
                                <a class="dropdown-item" href="#"><i class="fas fa-calculator"></i> Toán</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-book"></i> Văn</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-book"></i> Tiếng anh</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-cogs"></i> Vật Lý</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-search"></i> Sinh Học</a>
                            </div>
                        </div>
                        <div class="grade-8">
                            <p class="text-center">Khối 8</p>
                            <div class="course">
                                <a class="dropdown-item" href="#"><i class="fas fa-calculator"></i> Toán</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-book"></i> Văn</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-book"></i> Tiếng anh</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-cogs"></i> Vật Lý</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-filter"></i> Hóa Học</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-search"></i> Sinh Học</a>
                            </div>
                        </div>
                        <div class="grade-9">
                            <p class="text-center">Khối 9</p>
                            <div class="course">
                                <a class="dropdown-item" href="#"><i class="fas fa-calculator"></i> Toán</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-book"></i> Văn</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-book"></i> Tiếng anh</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-cogs"></i> Vật Lý</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-filter"></i> Hóa Học</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-search"></i> Sinh Học</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="dropdown dropright">
                    <p data-toggle="dropdown">
                        <i class="fas fa-graduation-cap"></i> Luyện thi vào 6
                    </p>
                    <div class="dropdown-menu" >
                        <div class="grade-6">
                            <p class="text-center">Tổng ôn</p>
                            <div class="course">
                                <a class="dropdown-item" href="#"><i class="fas fa-calculator"></i> Toán</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-book"></i> Văn</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-book"></i> Tiếng anh</a>
                            </div>

                        </div>
                        <div class="grade-6">
                            <p class="text-center">Luyện đề</p>
                            <div class="course">
                                <a class="dropdown-item" href="#"><i class="fas fa-calculator"></i> Toán</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-book"></i> Văn</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-book"></i> Tiếng anh</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="dropdown dropright">
                    <p data-toggle="dropdown">
                        <i class="fas fa-graduation-cap"></i> Lớp 1 - Lớp 2 - Lớp 3 - Lớp 4 - Lớp 5
                    </p>
                    <div class="dropdown-menu" >
                        <div class="grade-1">
                            <p class="text-center">Khối 1</p>
                            <div class="course">
                                <a class="dropdown-item" href="#"><i class="fas fa-calculator"></i> Toán</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-book"></i> Văn</a>
                            </div>

                        </div>
                        <div class="grade-2">
                            <p class="text-center">Khối 2</p>
                            <div class="course">
                                <a class="dropdown-item" href="#"><i class="fas fa-calculator"></i> Toán</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-book"></i> Văn</a>
                            </div>

                        </div>
                        <div class="grade-3">
                            <p class="text-center">Khối 3</p>
                            <div class="course">
                                <a class="dropdown-item" href="#"><i class="fas fa-calculator"></i> Toán</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-book"></i> Văn</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-book"></i> Tiếng anh</a>
                            </div>

                        </div>
                        <div class="grade-4">
                            <p class="text-center">Khối 4</p>
                            <div class="course">
                                <a class="dropdown-item" href="#"><i class="fas fa-calculator"></i> Toán</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-book"></i> Văn</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-book"></i> Tiếng anh</a>
                            </div>

                        </div>
                        <div class="grade-5">
                            <p class="text-center">Khối 5</p>
                            <div class="course">
                                <a class="dropdown-item" href="#"><i class="fas fa-calculator"></i> Toán</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-book"></i> Văn</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-book"></i> Tiếng anh</a>
                            </div>

                        </div>
                    </div>
                </li>
                <li class="dropdown dropright">
                    <p data-toggle="dropdown">
                        <i class="fas fa-graduation-cap"></i> Tiền tiểu học
                    </p>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Tiền tiểu học</a>
                    </div>
                </li>
            </ul>
        </div>
        <div class=" slide-show">
            <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
                <!--Indicators-->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                    <li data-target="#carousel-example-1z" data-slide-to="2"></li>
                    <li data-target="#carousel-example-1z" data-slide-to="3"></li>
                    <li data-target="#carousel-example-1z" data-slide-to="4"></li>
                    <li data-target="#carousel-example-1z" data-slide-to="5"></li>
                    <li data-target="#carousel-example-1z" data-slide-to="6"></li>
                </ol>

                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img  src="/image/slide1.png"
                              alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img src="/image/slide2.jpg"
                             alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img src="/image/slide3.jpg"
                             alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img src="/image/slide4.png"
                             alt="Four slide">
                    </div>
                    <div class="carousel-item">
                        <img src="/image/slide6.jpg"
                             alt="Five slide">
                    </div>
                    <div class="carousel-item">
                        <img src="/image/slide7.png"
                             alt="Six slide">
                    </div>
                </div>

                <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="content-right">
            <img src="/image/nen.png" alt="content-right" style="width: 100%">
            <img src="/image/nen1.jpg" alt="content-right" style="width: 100%">
        </div>
    </div>
    <div class="communication">
        <img src="/image/nen2.jpg" alt="">
    </div>
    <div class="content">
        <div class="content-child high-school">
            <div class="title">
                <a href="">Trung học phổ thông</a>
            </div>
            <div class="had-animations">
                <div class="advertisement">
                    <img src="/image/slide1.png" alt=advertisement"">
                </div>
                <div class="list_course slide-show">
                    <?php use Illuminate\Support\Facades\DB;
                    $data = DB::table('courses')
                    ->select('courses.*')
                    ->selectRaw('COUNT(lesson_id) as number_lesson')
                    ->join('lessons', 'courses.course_id', '=','lessons.course_id')
                    ->where('courses.grade','>=', '10')
                    ->groupByRaw('courses.course_id')
                        ->limit(3)
                    ->get();
                    ?>
                    @foreach($data as $item)
                        <div class="items carousel slide carousel-fade">
                            <img src="/image/{{$item->des_image}}"   alt="">
                            <p class="titles">{{$item->course_name}}</p>
                            <p class="lesson">
                                <span class="icon"><i class="fas fa-play-circle"></i></span>
                                <span class="number">{{$item->number_lesson}}</span>
                                <span class="text">Bài giảng</span>
                            </p>
                            <a href="{{route('views_course',$item->slug)}}">Tìm hiểu thêm</a>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="non-had-animations">
                <div class="list_course">
                    <?php $data = DB::table('courses')
                        ->select('courses.*')
                        ->selectRaw('COUNT(lesson_id) as number_lesson')
                        ->join('lessons', 'courses.course_id', '=','lessons.course_id')
                        ->where('courses.grade','>=', '10')
                        ->groupByRaw('courses.course_id')
                        ->limit(5)
                        ->get();;?>
                    @foreach($data as $item)
                        <div class="items">
                            <img src="/image/{{$item->des_image}}" alt="">
                            <p class="titles">{{$item->course_name}}</p>
                            <p class="lesson">
                                <span class="icon"><i class="fas fa-play-circle"></i></span>
                                <span class="number">{{$item->number_lesson}}</span>
                                <span class="text">Bài giảng</span>
                            </p>

                            <a href="{{route('views_course',$item->slug)}}">Tìm hiểu thêm</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="content-child secondary-school">
            <div class="title">
                <a href="">Trung học cơ sở</a>
            </div>
            <div class="had-animations">
                <div class="advertisement">
                    <img src="/image/slide4.png" alt=advertisement"">
                </div>
                <div class="list_course slide-show">
                    <?php $data = DB::table('courses')
                        ->select('courses.*')
                        ->selectRaw('COUNT(lesson_id) as number_lesson')
                        ->join('lessons', 'courses.course_id', '=','lessons.course_id')
                        ->where('courses.grade','>=', '10')
                        ->groupByRaw('courses.course_id')
                        ->limit(3)
                        ->get();?>
                    @foreach($data as $item)
                        <div class="items carousel slide carousel-fade">
                            <img src="/image/{{$item->des_image}}"   alt="">
                            <p class="titles">{{$item->course_name}}</p>
                            <p class="lesson">
                                <span class="icon"><i class="fas fa-play-circle"></i></span>
                                <span class="number">{{$item->number_lesson}}</span>
                                <span class="text">Bài giảng</span>
                            </p>

                            <a href="{{route('views_course',$item->slug)}}">Tìm hiểu thêm</a>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="non-had-animations">
                <div class="list_course">
                    <?php $data = DB::table('courses')
                        ->select('courses.*')
                        ->selectRaw('COUNT(lesson_id) as number_lesson ')
                        ->join('lessons', 'courses.course_id', '=','lessons.course_id')
                        ->where('courses.grade','>=', '10')
                        ->groupByRaw('courses.course_id')
                        ->limit(5)
                        ->get();;?>
                    @foreach($data as $item)
                        <div class="items">
                            <img src="/image/{{$item->des_image}}" alt="">
                            <p class="titles">{{$item->course_name}}</p>
                            <p class="lesson">
                                <span class="icon"><i class="fas fa-play-circle"></i></span>
                                <span class="number">{{$item->number_lesson}}</span>
                                <span class="text">Bài giảng</span>
                            </p>

                            <a href="{{route('views_course',$item->slug)}}">Tìm hiểu thêm</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="content-child primary-school">
            <div class="content-child primary-school">
                <div class="title">
                    <a href="">Tiểu học</a>
                </div>
                <div class="had-animations">
                    <div class="advertisement">
                        <img src="/image/tieuhoc.gif" alt=advertisement"">
                    </div>
                    <div class="list_course slide-show">
                        <?php $data = DB::table('courses')
                            ->select('courses.*')
                            ->selectRaw('COUNT(lesson_id) as number_lesson')
                            ->join('lessons', 'courses.course_id', '=','lessons.course_id')
                            ->where('courses.grade','>=', '10')
                            ->groupByRaw('courses.course_id')
                            ->limit(3)
                            ->get();;?>
                        @foreach($data as $item)
                            <div class="items carousel slide carousel-fade">
                                <img src="/image/{{$item->des_image}}"   alt="">
                                <p class="titles">{{$item->course_name}}</p>
                                <p class="lesson">
                                    <span class="icon"><i class="fas fa-play-circle"></i></span>
                                    <span class="number">{{$item->number_lesson}}</span>
                                    <span class="text">Bài giảng</span>
                                </p>

                                <a href="{{route('views_course',$item->slug)}}">Tìm hiểu thêm</a>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="non-had-animations">
                    <div class="list_course">
                        <?php $data = DB::table('courses')
                            ->select('courses.*')
                            ->selectRaw('COUNT(lesson_id) as number_lesson ')
                            ->join('lessons', 'courses.course_id', '=','lessons.course_id')
                            ->where('courses.grade','>=', '10')
                            ->groupByRaw('courses.course_id')
                            ->limit(5)
                            ->get();;?>
                        @foreach($data as $item)
                            <div class="items">
                                <img src="/image/{{$item->des_image}}" alt="">
                                <p class="titles">{{$item->course_name}}</p>
                                <p class="lesson">
                                    <span class="icon"><i class="fas fa-play-circle"></i></span>
                                    <span class="number">{{$item->number_lesson}}</span>
                                    <span class="text">Bài giảng</span>
                                </p>

                                <a href="{{route('views_course',$item->slug)}}">Tìm hiểu thêm</a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fighting" style="margin: 5% 10%">
        <img src="/image/nen4.jpg" alt="">
    </div>
@stop

