<form action="taxi/result" method="post">
    @csrf
    <input type="text" name="km">km</input><br>
    <input type="text" name="time">分</input>

    <input type="file" name="file"></input>
    <button type="submit">計算</buttom>
</form>