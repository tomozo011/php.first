<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homework1_1Controller extends Controller
{
    public function form(){
        return view('homework1-1\homework1-1');
    }

    public function result(){
        return view('homework1-1\result');
    }
}


