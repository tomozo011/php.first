<h1>1から<?php echo $_POST['number']; ?>までの合計値は</h1>
<?php
    $total = 0;
    for($i = 1; $i <= $_POST['number']; $i++){
        $total += $i;
    }
    echo $total;
?>
<br>
<button type="button" onclick=history.back()>戻る</button>
