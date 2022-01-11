<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $products = Product::orderby('id','ASC')->take(5)->get();
        $product = ['products'=> $products];

        return view('index', $product);
    }
}
