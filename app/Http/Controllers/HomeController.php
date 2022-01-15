<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function index()
    {
        $products = Product::orderby('id','ASC')->take(6)->get();
        $product = ['products'=> $products];

        if(\Illuminate\Support\Facades\Auth::check()){
            if(auth()->user()->type=='customer') {
            $id=DB::table('customers')->where('id','=',auth()->user()->id);
<<<<<<< HEAD
            if(isset($id)){
                if(auth()->user()->type=='customer') {
=======
            if(!isset($id)){
>>>>>>> 6ea3f9c784ac63c224e2426802b85376bb869417
                    DB::table('customers')->insert(
                        [
                            'id' => auth()->user()->id
                        ]);
                }
            }
        }

        return view('index', $product);
    }
}
