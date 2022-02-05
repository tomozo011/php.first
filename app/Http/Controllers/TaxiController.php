<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaxiController extends Controller
{
    public function taxi(){
        return view('taxi.taxi');
    }

    public function taxi_result(){
        // 普通
        $normal_first = 690;
        $normal_distance = 80;
        $normal_time = 80;
        // 大型
        $big_first = 760;
        $big_distance = 90;
        $big_time = 90;


        // 272m毎
        for($i = 1; ($_POST['km'] - 1500) - (272 * $i) >= 272 ; $i++){
                $normalover = $normal_distance * $i;
        }
        // 普通待ち時間
        for($i = 1; $_POST['time'] - 1.7 * $i >= 1.7; $i++){
                $normal_wait = $normal_time * $i;
        }

        // 普通処理
        if($_POST['km'] <= 1500){
            $normal_price = $normal_first;
        }elseif($_POST['km'] > 1500){
            $normal_price = $normal_first + $normalover;
        }
        if($_POST['time'] == true){
            $normal_price = $normal_price + $normal_wait;
        }


        // !--------------------------------------------------
        // 231m毎
        for($i = 1; ($_POST['km'] - 1500) - (231 * $i) >= 231 ; $i++){
                $big_over = $big_distance * $i;
        }
        // 大型待ち時間
        for($i = 1; $_POST['time'] - 1.4 * $i >= 1.4; $i++){
                $big_wait = $big_time * $i;
        }

        // 大型処理
            if($_POST['km'] <= 1500){
                $big_price = $big_first;
            }elseif($_POST['km'] > 1500){
                $big_price = $big_first + $big_over;
            }
            if($_POST['time'] == true){
                $big_price = $big_price + $big_wait;
            }
            
        // !---------------------------------------------------

        echo "タクシーA 普通" . " " . $normal_price . "<br>";
        echo "タクシーB 大型" . " " . $big_price;

        // !-----------------------------------------------------
        return view('taxi.result');
    }
}
