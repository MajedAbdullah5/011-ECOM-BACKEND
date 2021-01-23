<?php

namespace App\Http\Controllers;

use App\Models\product_details;
use App\Models\ProductListModel;
use Illuminate\Http\Request;

class ProductDetailsController extends Controller
{
    public function productDetails(Request $request){
        $product_code = $request->code;
        $productList = ProductListModel::where('product_code','=',$product_code)->get();
        $productCode = product_details::where('product_code','=',$product_code)->get();
        $result = [
            'productList'=>$productList,
            'productCode'=>$productCode,
        ];
        return $result;
    }
}
