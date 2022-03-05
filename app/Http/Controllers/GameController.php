<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    public function quiz(){
    $fir_Questions = ['ピカチュウ', 'コイキング', 'ニャース', 'ダグトリオ'];
    $sec_Questions = ['フライゴン', 'バンギラス', 'ニドキング', 'ルカリオ'];
        return view('game.game', compact('fir_Questions', 'sec_Questions'));
    }
    public function answer(Request $request){
        $answer1 = 'ダグトリオ';
        $answer2 = 'バンギラス';

        $get_ans1 = $request->input('fir');
        $get_ans2 = $request->input('sec');

        $point = 0;
        
            if($get_ans1 == $answer1){
                $point++;
            }
            if($get_ans2 == $answer2){
                $point++;
            }
            
        if($point <= 2){
            $score = '「たんぱんこぞう」レベルです。';
        }
        return view('game.answer', compact('point', 'score'));
    }
}
