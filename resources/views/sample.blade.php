<?php
    $items = [
        ['id'=>1, 'name'=>'pencil', 'price'=>100, 'stock'=>78, 'sales'=>47],
        ['id'=>2, 'name'=>'pen', 'price'=>150, 'stock'=>12, 'sales'=>30],
        ['id'=>3, 'name'=>'case', 'price'=>500, 'stock'=>12, 'sales'=>20],
        ['id'=>4, 'name'=>'note', 'price'=>200, 'stock'=>97, 'sales'=>100],
    ];
// !-------------------------------------------------

// 在庫多い
$stocks = array_column($items, 'stock');
$names = array_column($items, 'name');
// array_multisort($stocks, SORT_DESC, 
//                 $names,  SORT_DESC);
//     var_dump($stocks,$names);
// !------------------------------------------------------
// 在庫すくない
// foreach($stocks as $stock)
// if($stock < 30){
//     var_dump($stock);
// }

// !----------------------------------------------------------

// 売上
// $i=0;
// foreach($items as $item=>$value){
//     if($i===0){
//         $sales = array($value['price'] * $value['sales']); 
//         $sales_names = array($value['name']);
//     }else{
//         array_push($sales, $value['price'] * $value['sales']);
//         array_push($sales_names, $value['name']);
//     }
//     $i++;
// }
// array_multisort($sales, $sales_names);
// var_dump($sales); echo '<br>';
// var_dump($sales_names);

// 在庫少ない
foreach($items as $item => $value){
    if(strpos($value['name'], 'pen') === false){
    }else{
        var_dump($value['name']);
    }
}
?>