<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class ItemController extends Controller
{

    public function create(){
        return view('items.items');
    }

    public function index(){
        $getItems = Item::get();
        return view('items.store')->with(['getItems' => $getItems]);
    }

// 登録
    public function store(Request $request){
        $request->validate([
            'item' => 'required',
            'category' => 'required',
            'price' => 'required',
        ]);

        $item = new Item;
        $item->id = $request->id;
        $item->item = $request->item;
        $item->category = $request->category;
        $item->price = $request->price;
        $item->save();

        return redirect('index');
    }
// 更新
    public function edit($id){
        $get = Item::where('id', $id)->first();
        return view('items.edit', compact('get'));
    }

    public function update(Request $request){
        $item = Item::where('id', $_POST['id'])->first();
            $item->item = $_POST['item'];
            $item->category = $_POST['category'];
            $item->price = $_POST['price'];
            $item->save(); 
        return redirect('index');

    }
// 削除
    public function destory($id){
        $destory = Item::where('id', $id)->first();
        $destory->delete();

        return redirect('index');
    }
}

