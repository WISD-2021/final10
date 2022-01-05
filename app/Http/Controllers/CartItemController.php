<?php

namespace App\Http\Controllers;

use App\Models\Cart_Item;
use App\Http\Requests\StoreCart_ItemRequest;
use App\Http\Requests\UpdateCart_ItemRequest;

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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCart_ItemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCart_ItemRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cart_Item  $cart_Item
     * @return \Illuminate\Http\Response
     */
    public function show(Cart_Item $cart_Item)
    {
        //
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
