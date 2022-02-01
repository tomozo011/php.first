<h1>ID: <?php echo $_POST['id'] ?> は</h1>
<?php
    $ids = [100, 101, 102, 103, 104, 105];
        if(in_array($_POST['id'], $ids)) {
            echo '登録されています。';
        }else{
            echo '登録されていません。';
        }
?>
<br>
<button type="button" onclick=history.back()>戻る</button> 