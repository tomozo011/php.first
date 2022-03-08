<form action="/items/edited" method="post">
    @csrf
    <input type="hidden" name="id" value="{{$get->id}}"><br>
    アイテム名<input type="text" name="item" value="{{$get->item}}"><br>
    カテゴリー<input type="text" name="category" value="{{$get->category}}"><br>
    価格<input type="text" name="price" value="{{$get->price}}"><br>
    <button type="submit">更新</button>
<from>