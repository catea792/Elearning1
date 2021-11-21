@extends('main')
@section('show-test')
    <link rel="stylesheet" href="/css/course/show_test.css" type="text/css">
<div class="content">
    <div class="text-center advertisement">
        <img src="/image/qc.jpg" alt="quảng cáo">
    </div>
    <div class="title">
        <h3 class="text-center">KHÓA HỌC {{$result[0]->course_id}}</h3>
    </div>
    <div class="test mt-5">
        <h5 class="text-center">Bài kiểm tra cuối khóa học</h5>
        <h6 class="text-center">Số lượng câu hỏi: {{$count[0]->number}}</h6>
        <h6 class="text-center">Thời gian làm bài: 10 phút</h6>
        <h6 class="text-center">Hãy làm bài thật cố gắng để kiếm những bông hoa điểm 10.</h6>
        <h6 class="text-center">Chúc bạn may mắn :3</h6>
    </div>
    <div class="ready mt-5">
        <p class="text-center"> Click để bắt đầu làm bài</p>
        <p class="text-center"><i class="fas fa-arrow-down"></i></p>
        <p class="col-sm-2 btn-primary m-auto text-center">BẮT ĐẦU LÀM BÀI</p>
    </div>
    <div class="start">
        @foreach($result as $item)
            <div class="item">
                <p>
                    <span>Câu {{$item->id}}</span>
                    <span>: {{$item->question}}</span>
                </p>

            </div>
        @endforeach
    </div>
</div>

@endsection
