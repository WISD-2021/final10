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

Route::prefix('/{account}')->group(function (){
    Route::get('edit',[CustomerController::class,'edit'])->name('customers.edit');
    Route::post('update',[CustomerController::class,'update'])->name('customers.update');
    Route::get('/carts',[CartItemController::class,'show'])->name('carts.show');
    Route::get('/carts/create',[CartItemController::class,'create'])->name('carts.create');
    Route::post('/carts/store',[CartItemController::class,'store'])->name('carts.store');
    Route::post('/carts/update',[CartItemController::class,'update'])->name('carts.update');
    Route::delete('/carts/destroy',[CartItemController::class,'destroy'])->name('carts.destroy');
    Route::get('/carts/checkout',[CartItemController::class,'checkout'])->name('carts.checkout');
    Route::post('orders',[OrderController::class,'transform'])->name('orders.transform');
    Route::get('orders/{order}',[OrderController::class,'show'])->name('orders.show');

});



Route::prefix('admin')->group(function (){
   Route::get('/',[AdminController::class,'index'])->name('admin.index');
   Route::get('products',[AdminProductController::class,'show'])->name('admin.products.show');
   Route::get('products/create',[AdminProductController::class,'create'])->name('admin.products.create');
   Route::Post('products/store',[AdminProductController::class,'store'])->name('admin.products.store');
   Route::get('products/{id}}',[AdminProductController::class,'edit'])->name('admin.products.edit');
   Route::Post('products/update',[AdminProductController::class,'update'])->name('admin.products.update');
   Route::delete('products/destroy',[AdminProductController::class,'destroy'])->name('admin.products.destroy');

    Route::get('orders',[AdminOrderController::class,'show'])->name('admin.orders.show');
    Route::get('orders/{id}}',[AdminOrderController::class,'edit'])->name('admin.orders.edit');
    Route::Post('orders/update',[AdminOrderController::class,'update'])->name('admin.orders.update');
    Route::delete('orders/destroy',[AdminOrderController::class,'destroy'])->name('admin.orders.destroy');
});


Route::prefix('products')->group(function ()
    {
        Route::get('show',[ProductController::class,'show'])->name('products.show');
        Route::get('{category}',[ProductController::class,'category'])->name('products.category');
        Route::get('{request}',[ProductController::class,'search'])->name('products.search');

    });



