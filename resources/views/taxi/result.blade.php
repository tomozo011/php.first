<table border="1">
    <tr>
      <th>運賃</th>
    </tr>
    <tr>
    @foreach($answers as $answer)
      <td>{{$answer}}</td>
       @endforeach
    </tr>
  </table>


<form action="taxi" method="post"> 
    @csrf
    <button type="button" onclick=history.back()>戻る</button>
</form>