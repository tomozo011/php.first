<h1>IDを入力してください</h1>
<form action="getid/result" method="post">
    @csrf
    名前:<input type="text" name="name"></input>
    <button type="submit" >確認</button>
</form>