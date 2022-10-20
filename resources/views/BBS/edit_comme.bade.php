@extends('layout.layout')

@section('content')
    
    <form action="/edit_comme" method="get">
        <div class="form">    
            @csrf
                <h1>編集</h1>
                <p>投稿者</p>
                <input type="hidden" name="id" value="{{$datas->id}}">
                <input type="text" name="name" value="{{$datas->name}}">
                <p>本文</p>
                <textarea name="text" row="5" cols="33" placeholder="{{$datas->text}}"></textarea><br>
                <button type="submit">編集</button>
        </div>
    </form>
@endsection