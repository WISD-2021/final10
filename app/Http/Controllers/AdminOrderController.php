<?php

namespace App\Http\Controllers;
use App\Models\Item;
use App\Models\Order;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    public function show(){
        $orders=Order::orderBy('id', 'ASC')->get();
        $data=['orders'=>$orders];

        $items=Item::orderBy('id', 'ASC')->get();
        $data1=['items'=>$items];
        return view('admin.order', $data,$data1);
    }

    public function edit(){

    }

    public function update(){

    }

    public function destroy(){

    }
}
