<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCart extends Model
{
   protected $table="product_carts";
    protected $casts = [
        'total_price' => 'float'
    ];
}
