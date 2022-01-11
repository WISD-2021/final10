<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use http\Env\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
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
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $products=Product::orderby('id','ASC')->get();
        $data=['products'=>$products];
        return view('products.productitem',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //

    }


    public function detail($id)
    {
        $product=Product::find($id);
        $data = ['product' => $product];
        $productu=Product::orderby('id','ASC')->take(4)->get();
        $productur = ['products'=> $productu];
        return view('products.productitem',$data,$productur);

    }

    public function category($frag)
    {
        $category = DB::table('products')->where('frag','=',$frag)->get();
        return view('products.productcategory', ['product' => $category]);
    }
    public function all()
    {
        $products=Product::orderby('id','ASC')->get();
        $data=['products'=>$products];
        return view('products.allp',$data);
    }



}
