<form action="edited" method="post">
    @csrf
    ID<input type="text" name="id"><br>
    アイテム名<input type="text" name="item"><br>
    カテゴリー<input type="text" name="category"><br>
    価格<input type="text" name="price"><br>
    <button type="submit">更新</button>
<from>