<h1>数字を入力してください</h1>

<form action="sum/result" method="post">
    @csrf
    <input type="text" name="number"></input>
    <button type="submit">送信</button>
</form>