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
        $getItem = Item::where('item', $_POST['item'])->first();

        $url = 'http://127.0.0.1:8080/items';
        $lists = ['id', 'アイテム名', 'カテゴリー', '価格'];
        return view('items.store', compact('url', 'lists'))->with(['getItem' => $getItem]);
    }
// 更新
    public function edit(){
        return view('items.edit');
    }

    public function update(Request $request){
        $items = Item::where('id', $_POST['id'])->get();
        foreach($items as $item){
            $item->item = $_POST['item'];
            $item->category = $_POST['category'];
            $item->price = $_POST['price'];
            $item->save(); 
        }
        
        $url = 'http://127.0.0.1:8080/items';
        $getItem = Item::where('id', $_POST['id'])->first();
        return view('items.edited', compact('url', 'getItem'));
    }
// 削除
    public function dele(){
        return view('items.dele');
    }

    public function destory(Request $request){
        
        
        if(!empty($_POST['id'])){
            $getItems = Item::get();
            $destory = Item::where('id', $_POST['id'])->first();
            $destory->delete();
        }

        $lists = ['id', 'アイテム名', 'カテゴリー', '価格'];
        $url = 'http://127.0.0.1:8080/items';
        $getItem = Item::where('id', $_POST['id'])->first();
        return view('items.destroy', compact('lists', 'url'))->with(['getItem' => $getItem]);
    }
}