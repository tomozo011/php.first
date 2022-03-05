<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>アイテム登録</title>
<style>

</style>
</head>
<boby>
    <form action="items/entry" method="post">
        @csrf
        アイテム名<input type="text" name="item"><br>
        カテゴリー<input type="text" name="category"><br>
        価格<input type="text" name="price"><br>
        <button type="submit">登録</button>
    </form>
</boby>