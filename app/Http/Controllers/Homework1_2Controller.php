<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homework1_2Controller extends Controller
{
    public function sum(){
        return view('homework1-2\homework1-2');
    }

    public function result(){
        return view('homework1-2\result');
    }
}
