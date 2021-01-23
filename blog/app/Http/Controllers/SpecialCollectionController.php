<?php

namespace App\Http\Controllers;

use App\Models\special_collection;
use Illuminate\Http\Request;

class SpecialCollectionController extends Controller
{
    public function special_collection(){
        return special_collection::all();
    }
}
