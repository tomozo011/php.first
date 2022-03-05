<body>
    <form action="{{$url}}" method="get">
        <button type="submit">新規登録</button>
    </form>
    <form action="items/edit" method="get">
        <button type="submit">編集</button>
    </form>
    <form action="" method="get">
        <button type="submit">削除</button>
    </form>
    @foreach($getItems as $getItem) {{$getItem}} @endforeach
</body>