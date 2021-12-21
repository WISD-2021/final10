<?php

namespace App\Models;
use App\Models\Customer;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public function Customer()
    {
        return $this->belongsTo(Customer::class);
    }
    public function Product()
    {
        return $this->hasMany(Product::class);
    }
}
