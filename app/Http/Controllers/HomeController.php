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

            if(!isset($id)){
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
