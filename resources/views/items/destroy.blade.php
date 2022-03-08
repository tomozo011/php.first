<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>アイテム登録</title>
<form action="list" method="post">
    @csrf
    ID:<input type="text" name="id"></input>
    <button name="myForm" type="submit" onclick="alert()">確認</button>

    <script>
        function alert{
            var reslut = window.confirm('削除を行ってもいいですか？');
            if(result){
                console.log(result);
            }else{

            }
        }
    </script>

        <!-- <form action="{{ route('items/destory/'. $item->id) }}" id="form_{{$item->id}}" method="delete"> -->
        @csrf
                @method('delete')

                <a href = "{{ url('items/destory/'. $item->id) }}" >削除</a>
</form>