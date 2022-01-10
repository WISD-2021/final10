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
}
