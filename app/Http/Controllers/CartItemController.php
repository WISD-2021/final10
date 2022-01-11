<?php

namespace App\Http\Controllers;

use App\Models\Cart_Item;
use App\Http\Requests\StoreCart_ItemRequest;
use App\Http\Requests\UpdateCart_ItemRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        if(Auth::check()) /*判斷使用者登入*/
        {
            /*success*/
            $data=DB::table('cart__items')->where('customer_id','=',auth()->user()->id)->get(); /*使用者登入驗證*/

        }
        else
        {
            echo "<script>alert('尚未登入')</script>"; /*跳轉*/
            return redirect()->route('login');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $post = Cart_Item::create($request)->all();


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
        $product=Product::find($id);
        $data = ['product' => $product];
        return view('products.productitem',$data);
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
