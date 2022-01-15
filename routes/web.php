<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\AdminOrderController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartItemController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[\App\Http\Controllers\HomeController::class,'index'])->name('index');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::prefix('customers')->group(function(){

    Route::get('/',[CustomerController::class,'index'])->name('customers.index'); //會員中心
    Route::get('show',[CustomerController::class,'show'])->name('customers.show');//會員資料顯示+訂單
    Route::get('edit',[CustomerController::class,'edit'])->name('customers.edit');//會員資料編輯
    Route::post('store',[CustomerController::class,'store'])->name('customers.store');
    Route::post('update',[CustomerController::class,'update'])->name('customers.update');
    //購物車
    Route::get('/carts',[CartItemController::class,'show'])->name('carts.show');
    Route::get('/carts/create',[CartItemController::class,'create'])->name('carts.create');
    Route::post('/carts/store',[CartItemController::class,'store'])->name('carts.store');
    Route::post('/carts/update',[CartItemController::class,'update'])->name('carts.update');
    Route::delete('/carts/destroy',[CartItemController::class,'destroy'])->name('carts.destroy');
    Route::get('/carts/checkout',[CartItemController::class,'checkout'])->name('carts.checkout');
    //訂單轉換
    Route::post('orders',[OrderController::class,'transform'])->name('orders.transform');//CART轉換訂單
    Route::get('orders/{order}',[OrderController::class,'detail'])->name('orders.detail');//訂單詳細

});



Route::prefix('admin')->group(function (){
   Route::get('/',[AdminController::class,'index'])->name('admin.index');
   Route::get('products',[AdminProductController::class,'show'])->name('admin.products.show');
   Route::get('products/create',[AdminProductController::class,'create'])->name('admin.products.create');
   Route::post('products/store',[AdminProductController::class,'store'])->name('admin.products.store');
   Route::get('products/edit/{id}',[AdminProductController::class,'edit'])->name('admin.products.edit');
   Route::Post('products/update',[AdminProductController::class,'update'])->name('admin.products.update');
   Route::delete('products/{id}}',[AdminProductController::class,'destroy'])->name('admin.products.destroy');

    Route::get('orders',[AdminOrderController::class,'show'])->name('admin.orders.show');
    Route::get('orders/{id}}',[AdminOrderController::class,'edit'])->name('admin.orders.edit');
    Route::Post('orders/update',[AdminOrderController::class,'update'])->name('admin.orders.update');
    Route::delete('orders/destroy',[AdminOrderController::class,'destroy'])->name('admin.orders.destroy');
});


Route::prefix('products')->group(function ()
    {
        Route::get('show',[ProductController::class,'show'])->name('products.show');
        Route::get('all',[ProductController::class,'all'])->name('products.all');
        Route::get('show/{id}',[ProductController::class,'detail'])->name('products.detail');
        Route::get('{category}',[ProductController::class,'category'])->name('products.category');
        Route::get('{request}',[ProductController::class,'search'])->name('products.search');

    });



