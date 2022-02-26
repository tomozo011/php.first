<h1>IDを入力してください</h1>
<form action="getid/result" method="post">
    @csrf
    ID:<input type="text" name="id"></input>
    <button type="submit" >確認</button>
</form>