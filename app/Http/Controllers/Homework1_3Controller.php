<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homework1_3Controller extends Controller
{
    public function id(){
        return view('homework1-3.homework1-3');
    }

    public function result(){
        $ids = [100, 101, 102, 103, 104, 105];
        if(in_array($_POST['id'], $ids)) {
            echo '登録されています。';
        }else{
            echo '登録されていません。';
        }
        return view('homework1-3.result1-3');
    }
}
