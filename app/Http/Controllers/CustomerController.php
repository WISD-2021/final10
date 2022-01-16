<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use App\Models\Item;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $orders=Order::where('customer_id','=',auth()->user()->id)->orderby('id','ASC')->get();

        $items=Item::orderby('id','ASC')->get();
        $products=Product::orderby('id','ASC')->get();

        $sum=0;
        foreach ($orders as $order){
            foreach ($items as $item){
                if($order->id==$item->order_id){
                foreach ($products as $product){
                        if($item->product_id==$product->id){
                            $sum+=$product->price*$item->quantity;
                        }
                    }
                }
            }
        }
        $data=['orders'=>$orders,'sum'=>$sum];
        return view('customer.customer',$data);
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
     * @param  \App\Http\Requests\StoreCustomerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCustomerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
        $accounts=Product::find($customer);
        $account = ['customer' => $accounts];
        return view('customer.customeredit',$account);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
        $accounts=Product::find($customer);
        $account = ['customer' => $accounts];
        return view('customer.customerorder',$account);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCustomerRequest  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCustomerRequest $request, Customer $customer)
    {
        //

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
