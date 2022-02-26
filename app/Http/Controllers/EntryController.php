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
        $getids = User1::where('id', $_POST['id'])->first();
        return view('entry.getid_result')->with(['getids' => $getids]);
    }
}
