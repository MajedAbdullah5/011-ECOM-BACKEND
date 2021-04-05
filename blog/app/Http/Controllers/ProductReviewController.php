<?php

namespace App\Http\Controllers;

use App\Models\ProductReview;
use Illuminate\Http\Request;

class ProductReviewController extends Controller
{
   function postReview(Request $request){
       $review = new ProductReview();
       $review->product_code = $request->product_code;
       $review->product_name = $request->product_name;
       $review->mobile = $request->mobile;
       $review->reviewer_photo = $request->reviewer_photo;
       $review->reviewer_name = $request->reviewer_name;
       $review->reviewer_rating = $request->reviewer_rating;
       $review->reviewer_comments = $request->reviewer_comments;
       $review->save();
   }
   function getReview(Request  $request){
        return ProductReview::where('product_code','=',$request->code)->orderBy('id','desc')->limit(5)->get();
   }
}
