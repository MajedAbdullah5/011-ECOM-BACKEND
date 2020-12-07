<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SliderModel;

class SliderController extends Controller
{
   function SendSliderInfo(){
    return SliderModel::all();
   }
}
