<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User1;

class EntryController extends Controller
{
    public function entry(){
        return view('entry.entry');
    }

    public function store(Request $request){
        $entry = new User1;
        $entry->name = $request->name;
        $entry->address = $request->address;
        $entry->age = $request->age;
        $entry->save();

        $results = [$entry->name, $entry->address, $entry->age];
        return view('entry.entry_result', compact('results'));
    }

    public function getid(){
        return view('entry.getid');
    }
    public function getid_result(Request $request){
        $getnames = User1::where('name', $_POST['name'])->get();
        // dd($getnames);
        return view('entry.getid_result')->with(['getnames' => $getnames]);
    }

    public function delete(){
        return view('entry.deleteId');
    }
    public function deleteId(Request $request){
        $getId = User1::where('id', $_POST['id'])->first();
        $getId->delete();
        return view('entry.deleteId');
    }

    public function edit(){
        return view('entry.edit');
    }

    public function update(Request $request){
        $update = User1::where('id', $_POST['id'])->get();
        $update->name = $request->name;
        $update->address = $request->address;
        $update->age = $request->age;
        $update->save();
    }
        
}
