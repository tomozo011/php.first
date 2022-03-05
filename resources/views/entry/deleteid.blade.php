<h1>IDを入力してください</h1>
<form action="delete/id" method="post">
    @csrf
    ID:<input type="text" name="id"></input>
    <button type="submit" >確認</button>
</form>