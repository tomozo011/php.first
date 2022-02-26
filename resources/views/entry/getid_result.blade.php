<h1>登録情報は以下の通りです</h1>
<p>名前：{{$getids->name}}</p>
<p>住所：{{$getids->address}}</p>
<p>年齢：{{$getids->age}}</p>
<form>
    @csrf
    <button type="button" onclick=history.back()>戻る</button>
</form>