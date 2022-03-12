<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>アイテム登録</title>
<style>

</style>
</head>
<body>
    <form action="/items" method="get">
        <button type="submit">新規登録</button>
    </form>
    
    <table border="1">
    <tr>
      <th>id</th>
      <th>アイテム名</th>
      <th>カテゴリー</th>
      <th>価格</th>
      <th></th>
      <th></th>
    </tr>
    <tr>
        @foreach($getItems as $item)
    <tr>
        <td> {{$item->id}} </td>
        <td> {{$item->item}} </td>
        <td> {{$item->category}} </td>
        <td> {{$item->price}} </td>
        <td><a href = "{{url('/items/edit/'.$item->id)}}">編集</a> </td>
        <td><a href = "{{ url('items/destory/'. $item->id) }}" onClick="return alert()">削除</a></td>
    <tr>
        @endforeach
    </tr>
  </table>

   <script>
        function alert(){
            var check = confirm('削除を行ってもいいですか？');
            if(check == true){
                return true;
            }else{
                return false;
            }
        }
    </script>
</body>
