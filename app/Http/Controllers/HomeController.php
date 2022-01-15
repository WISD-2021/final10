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
        $products = Product::orderby('id','ASC')->take(6)->get();
        $product = ['products'=> $products];

        if(\Illuminate\Support\Facades\Auth::check()){
            $id=DB::table('customers')->where('id','=',auth()->user()->id);
            if(isset($id){
                if(auth()->user()->type=='customer') {
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
