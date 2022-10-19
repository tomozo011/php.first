<div id="shadow" class>
@extends('layout.layout')

@section('content')


    <div id="main">
        <h1>最新の投稿</h1>

        <div class="view">
            @foreach($results as $result)
                <p><span>{{$result->name}}</span>/{{$result->created_at}}</p>
                <p id="text">{{$result->text}}</p>
                <a href = "{{ url('/destory/'. $result->id) }}" id="delete">削除</a>
                <a href = "{{ url('/comment/'. $result->id) }}" id="comment">コメント</a>
                <a href = "{{ url('/write/'. $result->id) }}">編集</a>
                <div class="line"></div>
            @endforeach
        </div>
    </div>
</div>    
</div>

<form action="/top_post" method="post" id="show" class>
        <div class="form">    
            @csrf
            <h1>投稿フォーム</h1>
            <p>投稿者</p>
            <input type="text" name="name">
            <p>本文</p>
            <textarea name="text" row="5" cols="33"></textarea><br>
            <button type="submit">投稿</button> 
            <input type="button" value="戻る" id="close"> 
        </div>
</form>


@endsection