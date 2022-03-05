<h1>登録情報は以下の通りです</h1>
<p>名前：@foreach($getnames as $getname)
        {{$getname->name}}
        @endforeach
</p>
<p>住所：@foreach($getnames as $getname)
        {{$getname->address}}
        @endforeach
    </p>
<p>年齢：@foreach($getnames as $getname)
        {{$getname->age}}
        @endforeach
</p>
<form>
    @csrf
    <button type="button" onclick=history.back()>戻る</button>
</form>