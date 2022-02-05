<?php
$km = 3000;
$time = NULL;
// 普通
$normal_first = 690;
$normal_distance = 80;
$normal_time = 80;
// 大型
$big_first = 760;
$big_distance = 90;
$big_time = 90;

// 272m毎
for($i = 1; ($km - 1500) - (272 * $i) >= 272 ; $i++){
        $normalover = $normal_distance * $i;
}
// 普通待ち時間
for($i = 1; $time - 1.7 * $i >= 1.7; $i++){
        $normal_wait = $normal_time * $i;
}
// 231m毎
for($i = 1; ($km - 1500) - (231 * $i) >= 231 ; $i++){
        $big_over = $big_distance * $i;
}
// 大型待ち時間
for($i = 1; $time - 1.4 * $i >= 1.4; $i++){
        $big_wait = $big_time * $i;
}

// 普通処理
if($km <= 1500){
    $normal_price = $normal_first;
}elseif($km > 1500){
    $normal_price = $normal_first + $normalover;
}
if($time == true){
    $normal_price = $normal_price + $normal_wait;
}
// 大型処理
if($km <= 1500){
    $big_price = $big_first;
}elseif($km > 1500){
    $big_price = $big_first + $big_over;
}
if($time == true){
    $big_price = $big_price + $big_wait;
}
echo $normal_price . "<br>";
echo $big_price;

?>