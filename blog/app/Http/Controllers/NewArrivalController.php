<?php

namespace App\Http\Controllers;

use App\Models\new_arrival;
use Illuminate\Http\Request;

class NewArrivalController extends Controller
{
    public function new_arrivals(){
        return new_arrival::all();
    }
}
