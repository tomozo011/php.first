<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ポケモンクイズ</title>
<style>
    header{
        background-color: yellow;
    }
</style>
</head>

<header>
    <h1>ポケモンクイズ</h1>
</header>

<body>
    <div class="question1">
        <h1>NO.51といえば？</h1>
        <form action="quiz/answer" method="post">
            @csrf
            @foreach($fir_Questions as $fir_Question)
            <input type="radio" name="fir" value="{{$fir_Question}}"> {{$fir_Question}} <br>
            @endforeach
        
    <div class="question2">
        <h1>この中で600族は？</h1>
            @csrf
            @foreach($sec_Questions as $sec_Question)
            <input type="radio" name="sec" value="{{$sec_Question}}"> {{$sec_Question}} <br>
            @endforeach
            <button type=submit>次へ</button>
        </form>
    </div>
</body>
</html>


      