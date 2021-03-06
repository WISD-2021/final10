<?php

namespace App\Models;
use App\Models\Order;

use App\Models\Product;
use App\Models\Cart_Item;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    public function Order()
    {
        return $this->hasMany(Order::class);
    }
    public function Product()
    {
        return $this->hasMany(Product::class);
    }

    public function User()
    {
        return $this->belongsTo(User::class);
    }

}
