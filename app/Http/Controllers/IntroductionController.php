<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IntroductionController extends Controller
{
    public function top(){
        return view('introduction-top');
    }
    public function selfIntroduction(){
        return view('self-introducton');
    }
    public function inquiryIntroduction(){
        return view('inquiry-introduction');
    }
}
