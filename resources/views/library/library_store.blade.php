@extends('library.main_library')
<link rel="stylesheet" href="/css/library/library_store.css" type="text/css">

@section('library_store')
    <div class="row">
        <div class="image">
            <img src="/image/demo.jpg" alt="demo">
        </div>
    </div>
    <?php use Illuminate\Support\Facades\DB;
    $data =DB::table('libraries')->where('subject_name','=','Toán')->limit(3)->get();?>
    <div class="row">
        <div class="title">
            <p>TOÁN</p>
            @if(isset($data))
            <a href="{{route('views_all',$data[0]->subject_name)}}">Xem tất cả</a>
            @endif
        </div>
        <div class="contents">
            @foreach($data as $item)
                <div class="item">
                    <p class="titles">{{$item->title}}</p>
                    <p><i class="fas fa-folder-open"></i> {{$item->subject_name}} {{$item->grade}}</p>
                    <p>Tác giả: {{$item->author}}</p>
                    <a href="{{route('views',$item->slug)}}">Đọc online</a>
                </div>
            @endforeach

        </div>
    </div>
    <div class="row">
        <?php $data =DB::table('libraries')->where('subject_name','=','Vật lý')->limit(3)->get();?>
        <div class="title">
            <p>VẬT LÝ</p>
            @if(isset($data))
                <a href="{{route('views_all',$data[0]->subject_name)}}">Xem tất cả</a>
            @endif
        </div>
        <div class="contents">
            @foreach($data as $item)
                <div class="item">
                    <p class="titles">{{$item->title}}</p>
                    <p><i class="fas fa-folder-open"></i> {{$item->subject_name}} {{$item->grade}}</p>
                    <p>Tác giả: {{$item->author}}</p>
                    <a href="{{route('views',$item->slug)}}">Đọc online</a>
                </div>
            @endforeach
        </div>
    </div>
    <div class="row">
        <?php $data =DB::table('libraries')->where('subject_name','=','Hóa Học')->limit(3)->get();?>
        <div class="title">
            <p>HÓA</p>
            @if(isset($data))
                <a href="{{route('views_all',[$data[0]->subject_name])}}">Xem tất cả</a>
            @endif
        </div>
        <div class="contents">
            @foreach($data as $item)
                <div class="item">
                    <p class="titles">{{$item->title}}</p>
                    <p><i class="fas fa-folder-open"></i> {{$item->subject_name}} {{$item->grade}}</p>
                    <p>Tác giả: {{$item->author}}</p>
                    <a href="{{route('views',$item->slug)}}">Đọc online</a>
                </div>
            @endforeach
        </div>
    </div>
    <div class="row">
        <?php $data =DB::table('libraries')->where('subject_name','=','Tiếng anh')->limit(3)->get();?>
        <div class="title">
            <p>TIẾNG ANH</p>
            @if(isset($data))
                <a href="{{route('views_all',[$data[0]->subject_name])}}">Xem tất cả</a>
            @endif
        </div>
        <div class="contents">
            @foreach($data as $item)
                <div class="item">
                    <p class="titles">{{$item->title}}</p>
                    <p><i class="fas fa-folder-open"></i> {{$item->subject_name}} {{$item->grade}}</p>
                    <p>Tác giả: {{$item->author}}</p>
                    <a href="{{route('views',$item->slug)}}">Đọc online</a>
                </div>
            @endforeach
        </div>
    </div>
    <div class="row">
        <?php $data =DB::table('libraries')->where('subject_name','=','Văn')->limit(3)->get();?>
        <div class="title">
            <p>NGữ VĂN</p>
            @if(isset($data))
                <a href="{{route('views_all',[$data[0]->subject_name])}}">Xem tất cả</a>
            @endif
        </div>
        <div class="contents">
            @foreach($data as $item)
                <div class="item">
                    <p class="titles">{{$item->title}}</p>
                    <p><i class="fas fa-folder-open"></i> {{$item->subject_name}} {{$item->grade}}</p>
                    <p>Tác giả: {{$item->author}}</p>
                    <a href="{{route('views',$item->slug)}}">Đọc online</a>
                </div>
            @endforeach
        </div>
    </div>

@endsection

