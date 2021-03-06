<?php

namespace App\Http\Controllers;

use App\Models\ProductListModel;
use Illuminate\Http\Request;

class ProductListController extends Controller
{
   function ProductListByRemark(Request $request){
       $remark = $request->remark;
       return ProductListModel::where('remark',$remark)->get();

   }
   function ProductListBySubCategory(Request $request){
       $category = $request->category;
       $subcategory = $request->subcategory;
       return ProductListModel::where('category',$category)->where('subcategory',$subcategory)->get();
   }
   function ProductListByCategory(Request $request){
       $category = $request->category;
       return ProductListModel::where('category',$category)->get();
   }
   function ProductSearch(Request $request){
       return ProductListModel::where('title','LIKE',"%{$request->key}cd    %")->get();
   }
   function SuggestedProducts(Request $request){
       return ProductListModel::where('subcategory','=',$request->subcategory)->limit(12)->get();
   }
}
