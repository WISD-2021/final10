<?php

namespace App\Http\Controllers;

use App\Models\Cart_Item;
use App\Models\Item;
use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOrderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrderRequest $request)
    {
        //

        DB::table('orders')->insert(
            [
                'day'=>date("Y-m-d"),
                'state'=>'處理中',
                'customer_id'=>auth()->user()->id
            ]
        );

        $order_id=Order::orderby('id','DESC')->first()->id;
        $carts=DB::table('cart__items')->where('customer_id','=',auth()->user()->id)->get();
        foreach ($carts as $cart){
            DB::table('items')->insert(
                [
                    'order_id'=>$order_id,
                    'product_id'=>$cart->product_id,
                    'quantity'=>$cart->quantity
                ]
            );
        }


        Cart_Item::where('customer_id', '=', auth()->user()->id)->delete();

        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrderRequest  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }

    public function transform( $id)
    {
        //

    }
}
