<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class ItemController extends Controller
{
    public function create(){
        return view('items.items');
    }
    
// 登録
    public function store(Request $request){
        $item = new Item;
        $item->id = $request->id;
        $item->item = $request->item;
        $item->category = $request->category;
        $item->price = $request->price;
        $item->save();

        $getItems = Item::where('item', $_POST['item'])->get();

        $url = url()->previous();
        $lists = ['id', 'アイテム名', 'カテゴリー', '価格'];
        return view('items.store', compact('url', 'lists'))->with(['getItems' => $getItems]);
    }
// 更新
    public function edit(){
        return view('items.edit');
    }

    public function update(Request $request){
        $getItem = Item::where('id', $_POST['id'])->get();
        $getItem->item = $_POST['item'];
        $getItem->category = $_POST['category'];
        $getItem->price = $_POST['price'];
        $getItem->update();
    }
// 削除
    public function dele(){
        return view('items.dele');
    }

    public function destory(Request $request){
        $getItems = Item::get();
        $destory = Item::where('id', $_POST['id'])->first();
        $destory->delete();
        
        $url = url()->previous();
        return view('items.list', compact('url'))->with(['getItems' => $getItems]);
    }
}