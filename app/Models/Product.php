<?php

namespace App\Models;
use App\Models\Order;
use App\Models\Customer;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name','quan','price','speci','frag','type','remark','pic','unit','life'];

    public function Order()
    {
        return $this->hasMany(Order::class);
    }
    public function User()
    {
        return $this->hasMany(User::class);
    }

    public function Item()
    {
        return $this->hasOne(Product::class);
    }
}
