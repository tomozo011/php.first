<h1>新規登録</h1>
<form action="entry/result" method="post"> 
    @csrf
    お名前<input type="text" name="name"></input><br>
    住所<input type="text" name="address"></input><br>
    年齢<input type="text" name="age"></input><br>
    <button type="submit">新規登録</button>
</form>