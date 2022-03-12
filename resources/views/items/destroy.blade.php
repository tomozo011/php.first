<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>アイテム登録</title>
<form action="list" method="post">
    @csrf
    ID:<input type="text" name="id"></input>
    <button name="myForm" value="削除を行ってもいいですか？" onclick="alert()">確認</button>

    <script>
        function alert{
            window.confirm('削除を行ってもいいですか？');
        }
    </script>
</form>