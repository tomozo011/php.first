<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>アイテム登録</title>
<style>

</style>
</head>
<body>
    <form action="{{$url}}" method="get">
        <button type="submit">新規登録</button>
    </form>
    <form action="edit" method="get">
        <button type="submit">編集</button>
    </form>
    <form action="delete" method="get">
        @csrf
        <button type="submit" name="btn">削除</button>
    </form>
    
    <p>@foreach($lists as $list) {{$list}} @endforeach</p>
    {{$getItem->id}}
    {{$getItem->item}}
    {{$getItem->category}}
    {{$getItem->price}}

</body>
