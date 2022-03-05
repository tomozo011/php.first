<body>
    <form action="items" method="get">
        <button type="submit">新規登録</button>
    </form>
    <form action="edit" method="get">
        <button type="submit">編集</button>
    </form>
    <form action="delete" method="get">
        <button type="submit" id="btn">削除</button>
    </form>
    
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