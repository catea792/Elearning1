@extends('library.main_library')
@section('views')

    <div class="slide" style="width: 100%; height: 800px">
        <iframe src="/assets/{{$data->content}}" style="width: 100%; height: 100%">
        </iframe>
    </div>
@endsection

