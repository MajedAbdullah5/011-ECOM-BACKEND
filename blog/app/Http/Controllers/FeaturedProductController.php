<?php

namespace App\Http\Controllers;

use App\Models\featured_product;
use Illuminate\Http\Request;

class FeaturedProductController extends Controller
{
    public function featured_products(){
        return featured_product::all();
    }
}
