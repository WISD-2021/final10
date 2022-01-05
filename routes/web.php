<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\AdminOrderController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::prefix('/{account}')->group(function (){
    Route::get('/carts',[AdminController::class,'show'])->name('carts.show');
    Route::get('/carts/create',[AdminController::class,'create'])->name('carts.create');
    Route::get('/carts/store',[AdminController::class,'store'])->name('carts.edit');
    Route::get('/carts/update',[AdminController::class,'update'])->name('carts.update');
    Route::get('/carts/destroy',[AdminController::class,'destroy'])->name('carts.destroy');

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
