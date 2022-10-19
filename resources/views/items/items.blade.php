<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>アイテム登録</title>
<style>

</style>
</head>
<boby>
    <form action="/items/entry" method="post">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        @csrf
        アイテム名<input type="text" name="item" value="{{old('title')}}"><br>
        カテゴリー<input type="text" name="category" value="{{old('title')}}"><br>
        価格<input type="text" name="price" value="{{old('title')}}"><br>
        <button type="submit">登録</button>
    </form>
</boby>