<?php

namespace App\Models;
use App\Models\Customer;
use App\Models\Product;
use App\Models\Item;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['day','state','customer_id'];

    public function Customer()
    {
        return $this->belongsTo(Customer::class);
    }
    public function Product()
    {
        return $this->hasMany(Product::class);
    }

}
