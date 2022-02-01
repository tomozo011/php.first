<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homework1_3Controller extends Controller
{
    public function id(){
        return view('homework1-3\homework1-3');
    }

    public function result(){
        return view('homework1-3\result1-3');
    }
}
