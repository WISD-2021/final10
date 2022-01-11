<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    public function show(){
        $products=Product::orderBy('id', 'ASC')->get();
        $data=['products'=>$products];
        return view('admin.product', $data);
    }

    public function create(){
        return view('admin.products.productcreate');
    }

    public function store(){

    }

    public function edit(){

    }

    public function update(){

    }

    public function destroy(){

    }
}
