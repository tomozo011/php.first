<h1>点数（1～100）を入力してください！！</h1>

<form action="form/result" method="post">
    @csrf
        <input type="text" name="point"></input>
        <button type="submit">送信</button>
</form>
