<?php

namespace App\Http\Controllers;

use App\Models\Cart_Item;
use App\Http\Requests\StoreCart_ItemRequest;
use App\Http\Requests\UpdateCart_ItemRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class CartItemController extends Controller
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
    public function create(Request $request)
    {
        //
        return view('carts');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCart_ItemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id)
    {
        //
        $carts=DB::table('cart__items')->where('product_id','=',$id)->get();
        if(!isset($caets)){
            DB::table('cart__items')->insert
            (
                [
                    'customer_id'=>auth()->user()->id,
                    'product_id'=>$id,
                    'quantity'=>'1'
                ]
            );
        }
        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cart_Item  $cart_Item
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $carts=Cart_Item::find($id);
        $data = ['cart_item' => $carts];
        return view('cart',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cart_Item  $cart_Item
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart_Item $cart_Item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCart_ItemRequest  $request
     * @param  \App\Models\Cart_Item  $cart_Item
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCart_ItemRequest $request, Cart_Item $cart_Item)
    {
        //

        $carts=Cart_Item::orderby('id','ASC')->get();
        $carts->update($request->all());
        return redirect()->route('carts.show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cart_Item  $cart_Item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart_Item $cart_Item)
    {
        //
    }
}
