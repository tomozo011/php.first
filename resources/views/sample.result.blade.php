<table border="1">
    <tr>
      <th>運賃</th>
    </tr>
    <tr>
    @foreach(answers as answer)
        {{answer}}
    @endforeach
    </tr>
</table>

<form action="sample" method="post"> 
    @csrf
    <button type="button" onclick=history.back()>戻る</button>
</form>