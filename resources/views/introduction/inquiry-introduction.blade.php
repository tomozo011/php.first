<!DOCTYPE html>
<head>
    <html lang="ja">
    <meta charset="UTF-8">
    <meta http-equiv='Content-Style-Type' content='text/javascript'>
    <title>自己紹介</title>
    <link rel="stylesheet" href="css/introduction.css">
</head>

<header>
    <div class="top">
        <h2>お問い合わせ</h2>
    </div>
    <div class="nav">
        <ul>
            <li><a href="{{url('introduction')}}">トップ</a></li>
            <li><a href="#">ナビ２</a></li>
            <li><a href="#">ナビ３</a></li>
            <li><a href="{{url('self-introduction')}}">自己紹介</a></li>
            <li><a href="{{url('inquiry-introduction')}}">問い合わせ</a></li>
        </ul>
    </div>
    
</header>


<div class="wrap">
    <div class="inquiry">
        <form name="form" action="inquiry" method="post">
        @csrf
            <label id="label">名前</label>
            <input type="text" name="name" placeholder="入力してください" id="border"></input><br>
            <label id="label">性別</label>
            <input type="radio" name="sex" value="男"></input>男<input type="radio" name="sex" value="女"></input>女<br>
            <label>問合内容</label>
            <textarea name="content" cols="50" rows="10" placeholder="入力してください" id="border"></textarea><br>
            <label>添付ファイル</label>
            <input type="file" name="file"></input>
            <button type="submit" id="btn">送信</button>
        </form>
    </div>    
    
</div>

<script>
    const btn = document.getElementById("btn");
    btn.addEventListener("click", () => {
        const form = document.forms.form;
        console.log(form.name.value);
        console.log(form.sex.value);
        console.log(form.content.value);
        console.log(form.flie.value);
    
        if(form.name.value == ""){
            console.log = "名前を入力してください";
        }
        if(form.sex.value == ""){
            console.log("性別を入力してください");
        }
        if(form.content.value == ""){
            console.log("問い合わせ内容を入力してください");
        }
    });
</script>

<div class="footer">
    <h1>2022 〇〇 All Rigths Reserved</h1>
</div>