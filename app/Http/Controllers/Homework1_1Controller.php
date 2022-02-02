<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homework1_1Controller extends Controller
{
    public function form(){
        return view('homework1-1.homework1-1');
    }

    public function result(){
            if(0 < $_POST['point'] && $_POST['point'] <= 50){
                 echo '頑張りましょう';
            }elseif(50 < $_POST['point'] && $_POST['point'] <= 80){
                echo 'よくできました';
            }elseif(80 < $_POST['point'] && $_POST['point'] <= 100){
                echo '大変よくできました';
            }else{
                echo '0～100を入力してください';
            }
        return view('homework1-1.result');
    }
}


