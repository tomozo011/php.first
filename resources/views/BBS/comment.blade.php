@extends('layout.layout')
    
@section('content')
<h1 id="topic">原文</h1>
    <div class="origin">
        <p><span>{{$origins->name}}</span>/{{$origins->created_at}}</p>
        <p id="text">{{$origins->text}}</p>
        <div class="line"></div>
    </div>

<h1 id="topic">コメント</h1>
    <div class="comment">
        @if(isset($comments))
            
            @foreach($comments as $comment)
                <p><span>{{$comment->name}}</span>/{{$comment->created_at}}</p>
                <p id="text">{{$comment->text}}</p>
                <a href = "{{ url('/destory_comme/'. $comment->id) }}" id="delete">削除</a>
                <a href = "{{ url('/write_comme/'. $comment->id) }}" id="edit">編集</a>
                <div class="line"></div>
            @endforeach
        @endif
    </div>

    <form action="/comment_save" method="post">
        <div class="form">    
            @csrf
                <h1>コメント</h1>
                <p>投稿者</p>
                <input type="hidden" name="id" value="{{$origins->id}}">
                <input type="text" name="name">
                <p>本文</p>
                <textarea name="text" row="5" cols="33"></textarea><br>
                <button type="submit">コメント</button>
        </div>
    </form>
    
@endsection