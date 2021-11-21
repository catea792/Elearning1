
@extends('library.main_library')
<link rel="stylesheet" href="/css/library/library_store.css" type="text/css">

@section('views-all')
    @if(isset($data))
        <div class="row">
            <div class="title">
                <p>{{$data[0]->subject_name}}</p>
            </div>
            <div class="contents" style="display: inline-flex; flex-wrap: wrap-reverse">
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
    @endif
    {{$data->links()}}
@endsection

