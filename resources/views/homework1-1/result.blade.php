<h1>結果</h1>
<?php
    if(0 < $_POST['point'] && $_POST['point'] <= 50){
        echo '頑張りましょう';
    }elseif(50 < $_POST['point'] && $_POST['point'] <= 80){
        echo 'よくできました';
    }elseif(80 < $_POST['point'] && $_POST['point'] <= 100){
        echo '大変よくできました';
    }else{
        echo '0～100を入力してください';
    }
?>
<br>
<button type="submit" onclick=history.back()>戻る</buttton>

