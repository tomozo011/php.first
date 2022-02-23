<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(){
        return view('index');
        }
    
    public function sample(){
        return view('sample');
    }

    public function sample_result(){
        // 普通
        $normal_first = 690;
        $normal_plus = 80;
        $normal_time = 80;
        // 大型
        $big_first = 760;
        $big_plus = 90;
        $big_time = 90;

    // 加算処理
        for($i = 1; ($_POST['km'] - 1500) * (272 * $i) >= 272; $i++){
            $normal_over = $normal_plus * $i;
        }
        for($i = 1; ($_POST['km'] - 1500) * (231 * $i) >= 231; $i++){
            $big_over = $big_plus * $i;
        }

    // 待ち時間
        for($i = 0; $_POST['time'] - 1.7 * $i >= 1.7; $i++){
            $normal_wait = $normal_time * $i;
        }
        for($i = 0; $_POST['time'] - 1.4 * $i >= 1.4; $i++){
            $big_wait = $big_time * $i;
        }

    // 普通処理
        if($_POST['km'] <= 1500){
            $normal_price = $normal_first;
        }else{
            $normal_price = $normal_first + $normal_over;
        }
        if($_POST['time'] == true){
            $normal_price = $normal_price + $normal_wait;
        }
    // 大型
        if($_POST['km'] <= 1500){
            $big_price = $big_first;
        }else{
            $big_price = $big_first + $big_over;
        }
        if($_POST['time'] == true){
            $big_price = $big_price + $big_wait;
        }

        $answers = [$normal_price, $big_price];
        return view('sample_result', compact('answers'));
    }

}
