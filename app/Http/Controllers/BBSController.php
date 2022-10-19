<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Write;
use App\Comment;

class BBSController extends Controller
{
    public function top (Request $request){
        
        if(isset($request->name)){
            $write = new Write();
            $write->name = $request->name;
            $write->text = $request->text;
            $write->save();
        }
            
        // get
        $gets = [];
        $gets[] = Write::get();
        $results = [];
        $createds = [];

        foreach($gets[0] as $get => $value){
            $createds[] = $value->created_at;
            $results[] = $value;
        }
        array_multisort($createds, SORT_DESC, $results);

        $getCommes = Comment::get();

        if(isset($getComments)){
            foreach($getCommes as $getComme => $value){
                $comment_ids[] = $value->comment_id;
            }
            
            $count = array_count_values($comment_ids);
        }else {
            $count = 0;
        }
            
        // $a = count($results);
        
        // for($i=1; $a > $i; $i++){
        //     // dd($results);
        //     if($results[0]->id == $count){
        //         // dd($results);
        //         // dd($count[$i]);
        //     }
        // }
            
            
    
                        
        return view('BBS.top', compact('results', 'count'));
    }

    public function top_post (Request $request){
        
        if(isset($request->name)){
            $write = new Write();
            $write->name = $request->name;
            $write->text = $request->text;
            $write->save();
        }
            
        // get
        $gets = [];
        $gets[] = Write::get();
        $results = [];
        $createds = [];

        foreach($gets[0] as $get => $value){
            $createds[] = $value->created_at;
            $results[] = $value;
        }
        array_multisort($createds, SORT_DESC, $results);

        return view('BBS.top', compact('results'));
    }

    public function edit(Request $request) {
        $edit = Write::where('id', $request->id)->first();
        $edit->id = $request->id;
        $edit->name = $request->name;
        $edit->text = $request->text;
        $edit->save();
        
        $gets = [];
        $gets[] = Write::get();
        $results = [];
        $createds = [];

        foreach($gets[0] as $get => $value){
            $createds[] = $value->created_at;
            $results[] = $value;
        }
        array_multisort($createds, SORT_DESC, $results);
        return view('BBS.top_post', compact('results'));
    }

    public function destory($id) {
        $delete[] = Comment::where('comment_id', $id)->delete();


        $destory = Write::where('id', $id)->first();
        $destory->delete();

        // get
        $gets = [];
        $gets[] = Write::get();
        $results = [];
        $createds = [];

        foreach($gets[0] as $get => $value){
            $createds[] = $value->created_at;
            $results[] = $value;
        }
        array_multisort($createds, SORT_DESC, $results);
        return view('BBS.top_post', compact('results'));
    }

    public function write ($id){
        $datas = Write::where('id', $id)->first();
        return view('BBS.edit', compact('datas'));
    }

    public function comment($id) {

        $getComments = [];
        $getComments[] = Comment::where('comment_id', $id)->get();
        foreach($getComments as $getComment){
            $comments = $getComment;
        }
        // dd($comments);
        // if(MyBBS::comments()->where('comment_id', $id)->exists()){
        //     $getComments[] = Comment::where('comment_id', $id)->get();
        // }
        $origins = Write::where('id', $id)->first();
        return view('BBS.comment', compact('origins', 'comments'));
    }

    public function comment_save(Request $request) {
        $comment = new Comment();
        $comment->comment_id = $request->id;
        $comment->name = $request->name;
        $comment->text = $request->text;
        $comment->save();

        $origins = Write::where('id', $request->id)->first();
        $comments = Comment::where('comment_id', $request->id)->get();

        return view('BBS.comment', compact('origins', 'comments'));
    }


    public function destory_come($id) {
        $destory = Comment::where('id', $id)->first();
        $destory->delete();

        // get
        $gets = [];
        $gets[] = Write::get();
        $results = [];
        $createds = [];

        foreach($gets[0] as $get => $value){
            $createds[] = $value->created_at;
            $results[] = $value;
        }
        array_multisort($createds, SORT_DESC, $results);
        return view('BBS.top_post', compact('results'));
    }

    public function write_come ($id){
        $datas = Comment::where('id', $id)->first();
        return view('BBS.edit_comme', compact('datas'));
    }

    public function edit_comme(Request $request) {
        $edit = Comment::where('id', $request->id)->first();
        $edit->id = $request->id;
        $edit->name = $request->name;
        $edit->text = $request->text;
        $edit->save();
        
        $gets = [];
        $gets[] = Write::get();
        $results = [];
        $createds = [];

        foreach($gets[0] as $get => $value){
            $createds[] = $value->created_at;
            $results[] = $value;
        }
        array_multisort($createds, SORT_DESC, $results);
        return view('BBS.top_post', compact('results'));
    }
}
