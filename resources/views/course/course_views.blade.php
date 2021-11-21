@extends('main')
<link rel="stylesheet" href="/css/course/course_view.css" type="text/css">
@section('course_views')

<div class="container">
    <div class="link">
        <p> <a href="{{route('home')}}"><i class="fas fa-home"></i>Trang chủ </a> > Khóa học {{$course->course_name}}</p>
    </div>
    <div class="text-center">
        <img src="/image/qc.jpg" alt="quảng cáo">
    </div>
    <div class="course-name">
        <h3>{{$course->course_name}}</h3>
    </div>
    <div class="video">
        <video width="1120" height="540" controls>
            <source src="/movie/{{$course->video}}" type="video/mp4">
        </video>
    </div>

    <div class="description">
        <h6>Mô tả khóa học</h6>
        <br>
        <p>
            {{$course->description}}
        </p>

    </div>
    <div class="requirements">
        <h6>Yêu cầu của khóa học</h6>
        <br>
        <p>
            {{$course->requirements}}
        </p>
    </div>
    <div class="outcomes">
        <h6>Kết quả sau khóa học</h6>
        <br>
        <p>
            {{$course->outcomes}}
        </p>
    </div>
    <div class="row">
        <div class="col-md-10">
            <p>Bài giảng<i class="fas fa-caret-down"></i></p>
            @foreach($lessons as $lesson)
            <div class="lesson">
                <p class="titles"><i class="far fa-circle"></i>Bài {{$lesson->lesson_id}} : {{$lesson->lesson_name}}</p>
                <div class="col-12">
                    <ul>
                        <li>
                            <a onclick="saveHistory('{{$lesson->course_id}}', '{{$lesson->slug}}')" href="{{route('lesson_views',$lesson->slug)}}" class="video"><i class="fas fa-play-circle"></i>Video bài học</a>
                        </li>
                        <li>
                            <a href="" class="test"><i class="fal fa-stop"></i>Làm bài kiểm tra</a>
                        </li>
                    </ul>
                </div>
            </div>
            @endforeach
            <a class="final-test" style="text-decoration: none;" href="{{route('course_final_test',[$course->course_id])}}">
                <i class="far fa-square"></i>Kiểm tra sau khóa học
            </a>
        </div>
    </div>
    <div class="comment" style="margin-top: 5%">
        <h3>Nhận xét</h3>
    </div>
</div>

<script>
    const csrf = '{{csrf_token()}}';
    function saveHistory(couserId, lessonSlug) {
        const params = {
            'course_id': couserId,
            'lession_slug': lessonSlug,
            '_token': csrf
        };
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "POST",
            url: '/history',
            data: params,
            success: function(data) {
                console.log(data);
            },
        });
    }
</script>
@endsection

