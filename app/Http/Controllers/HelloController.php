<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(){
        return view('index');
        }
    
    public function test(){
        return view('sample');
    }
}