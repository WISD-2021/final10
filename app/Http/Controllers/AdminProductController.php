<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{

    //
    public function show(){
        $products=Product::orderBy('id', 'ASC')->get();
        $data=['products'=>$products];
        return view('admin.product', $data);
    }

    public function create(){
        return view('admin.products.productcreate');
    }

    public function store(Request $request){
        Product::create($request->all());
        return redirect()->route('admin.products.show');
    }

    public function edit($id)
    {
        $products = Product::find($id);
        $data1= ['products'=>$products];
        return view('admin.products.productedit',$data1);
    }

    public function update(Request $request,$id){
        $products=Product::find($id);
        $products->update($request->all());
        return redirect()->route('admin.products.show');
    }

    public function destroy($id){
        Product::destroy($id);

        return redirect()->route('admin.products.show');
    }
}
