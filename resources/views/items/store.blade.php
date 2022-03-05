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
        <button type="submit" id="btn">削除</button>
    </form>
    <ul>
        <li>@foreach($lists as $list) {{$list}} @endforeach</li>
    </ul>
    @foreach($getItems as $getItem) {{$getItem->id}} @endforeach <br>
    @foreach($getItems as $getItem) {{$getItem->item}} @endforeach <br>
    @foreach($getItems as $getItem) {{$getItem->category}} @endforeach <br>
    @foreach($getItems as $getItem) {{$getItem->price}} @endforeach

    <script>
        const btn = document.getElementId('btn');
        btn.addEventListener('cilick', () => {
            console.log("クリックされました");
        });
    </script>
</body>
