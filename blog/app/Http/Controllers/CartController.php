<?php

namespace App\Http\Controllers;

use App\Models\ProductCart;
use App\Models\ProductListModel;
use Illuminate\Http\Request;

class CartController extends Controller
{
    function AddToCart(Request $request)
    {
        $product_code = $request->product_code;
        $productList = ProductListModel::where('product_code', $product_code)->get();
        $img = $productList[0]['image'];
        $product_name = $productList[0]['title'];
        $color = $request->color;
        $size = $request->size;
        $quantity = $request->quantity;
        $phone = $request->phone;
        $product_discount_price = $productList[0]['discount_price'];
        $product_price = $productList[0]['price'];
        $shop_name = $productList[0]['shop_name'];
        $shop_code = $productList[0]['shop_code'];

        if ($product_discount_price == "NA") {
            $total_price = $product_price * $quantity;
            $unit_price = $product_price;
        } else {
            $total_price = $product_discount_price * $quantity;
            $unit_price = $product_discount_price;
        }
       return ProductCart::insert([
            'img'=>$img,
            'color'=>$color,
            'size'=>$size,
            'product_name'=>$product_name,
            'product_code'=>$product_code,
            'shop_name'=>$shop_name,
            'shop_code'=>$shop_code,
            'product_info'=>"Color:".$color."Size:".$size,
            'product_quantity'=>$quantity,
            'unit_price'=>$unit_price,
            'total_price'=>$total_price,
            'mobile'=>$phone,
        ]);

    }
    function GetCartList(Request $request){
        $mobile = $request->mobile;
        return ProductCart::where('mobile',$mobile)->get();
    }
    function CountPriceItem(Request $request){
        $mobile = $request->mobile;
        return ProductCart::where('mobile',$mobile)->count();
    }
    function CountTotalPrice(Request $request){
        $mobile = $request->mobile;
        return ProductCart::where('mobile',$mobile)->sum('total_price');
    }
    function DeleteItem(Request $request){
        $id = $request->id;
        return ProductCart::where('id',$id)->delete();
    }
}
