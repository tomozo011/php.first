<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\introdction;

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
        $introduction = new introdction;
        $introduction->name = $request->name;
        $introduction->sex = $request->sex;
        $introduction->content = $request->content;
        $introduction->file = $request->file;
        $introduction->save();
    }
}
