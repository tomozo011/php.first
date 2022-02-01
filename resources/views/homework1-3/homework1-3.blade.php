<h1>IDを入力してください</h1>
<form action="id/result" method="post">
    @csrf
    <label>ID:</label>
    <input type="text" name="id"></input>
    <button type="submit">送信</button>
</form>