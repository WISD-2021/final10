<?php

namespace App\Http\Controllers;
use App\Models\Item;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminOrderController extends Controller
{
    public function show(){
        $orders=Order::orderBy('id', 'ASC')->get();
        $items=Item::orderBy('id', 'ASC')->get();

        $data=['orders'=>$orders,'items'=>$items];
        return view('admin.order', $data);
    }

    public function edit(){

    }

    public function update(Request $request, $id){

        $state=$request->input('state');
        DB::table('orders')
            ->where('id','=',$id)
            ->update([
                'state' => $state
            ]);

        return redirect()->route('admin.orders.show');
    }

    public function destroy(){

    }
}
