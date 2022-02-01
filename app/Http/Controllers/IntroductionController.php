<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IntroductionController extends Controller
{
    public function top(){
        return view('introduction\introduction-top');
    }
    public function selfIntroduction(){
        return view('introduction\self-introducton');
    }
    public function inquiryIntroduction(){
        return view('introduction\inquiry-introduction');
    }
    public function store(Request $request){
        dump($request->name);
        dd($request);
    }
}
