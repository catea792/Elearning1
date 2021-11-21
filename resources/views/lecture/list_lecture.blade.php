<link rel="stylesheet" href="/css/lectures.css">
@extends('main')
@section('list-lecture')
    <div class="teacher-day" style="width: 100%">
        <img src="/image/ngaynhagiao.jpg" alt="" width="100%">
    </div>
    <div class="contents">
        @foreach($data as $item)
            @if($item->avatar != null)
                <div class="item">
                    <img src="/lecture/{{$item->avatar}}" alt="">
                    <p class="name" >
                        <span>{{$item->first_name}}</span>
                        <span>{{$item->last_name}}</span>
                    </p>
                    <p class="university">{{$item->university}}</p>
                    <p class="level_name">Khối giảng dạy: {{$item->level_name}}</p>
                </div>
            @endif
        @endforeach

    </div>
    <div class="col-md-2" style="margin: 2% auto">
        {{$data->links()}}
    </div>

@endsection
