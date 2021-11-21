@extends('main')
@section('views-course-question-detail')
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'summary-ckeditor' );
    </script>
    <div class="container" style="margin-top: 5%; margin-bottom: 5%">
        <div class="home">
            <p style="font-size: 18px; margin-top: 1%; margin-bottom: 3%"><a href="{{route('home')}}"><i class="fas fa-home"></i>Trang chủ</a>
                >
                <a href="{{route('list_course')}}">Khóa học</a>
                >
                <a href="{{route('list_question', $result->course_id)}}"> Danh sách câu hỏi</a>
                > Chi tiết câu hỏi
            </p>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h4>Chi tiết câu hỏi</h4>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                    <div class="form-group row">
                                        <label for="course_id" class="col-4 col-form-label">Mã khóa học</label>
                                        <div class="col-8">
                                            <input name="course_id" class="form-control here" value="{{$result->course_id}}" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="id" class="col-4 col-form-label">Câu hỏi số </label>
                                        <div class="col-8">
                                            <input name="id" class="form-control here" value="{{$result->id}}" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="question" class="col-4 col-form-label">Nội dung câu hỏi</label>
                                        <div class="col-8">
                                            <input  name="question" class="form-control here" value="{{$result->question}}" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="choose_1" class="col-4 col-form-label">Đáp án A</label>
                                        <div class="col-8">
                                            <input  name="choose_1" class="form-control here" value="{{$result->choose_1}}" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="choose_2" class="col-4 col-form-label">Đáp án B </label>
                                        <div class="col-8">
                                            <input  name="choose_2" class="form-control here" value="{{$result->choose_2}}" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="choose_3" class="col-4 col-form-label">Đáp án C </label>
                                        <div class="col-8">
                                            <input  name="choose_3" class="form-control here" value="{{$result->choose_3}}" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="choose_4" class="col-4 col-form-label">Đáp án D </label>
                                        <div class="col-8">
                                            <input  name="choose_4" class="form-control here" value="{{$result->choose_4}}" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="answer" class="col-4 col-form-label">Đáp án chính xác </label>
                                        <div class="col-8">
                                            <input  name="answer" class="form-control here" value="{{$result->answer}}" placeholder="Nhập A, B, C, D" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="point" class="col-4 col-form-label">Điểm cho câu hỏi </label>
                                        <div class="col-8">
                                            <input  name="point" class="form-control here" value="{{$result->point}}" type="text">
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
@endsection
