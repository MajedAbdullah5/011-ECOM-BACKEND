<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryDetailsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FeaturedProductController;
use App\Http\Controllers\NewArrivalController;
use App\Http\Controllers\ProductDetailsController;
use App\Http\Controllers\ProductListController;
use App\Http\Controllers\SiteInfoController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\SpecialCollectionController;
use App\Http\Controllers\VisitorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\ProductReviewController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//Visitor Details
Route::get('/GetVisitorDetails',[VisitorController::class,'GetVisitorDetails']);

//Contact Details
Route::post('/PostContactDetails',[ContactController::class,'PostContactDetails']);

//Site Info
Route::get('/SendSiteInfo',[SiteInfoController::class,'SendSiteInfo']);

// Category Details
Route::get('/SendCategoryDetails',[CategoryDetailsController::class,'SendCategoryDetails']);

//ProductList
Route::get('/ProductListByRemark/{remark}',[ProductListController::class,'ProductListByRemark']);
Route::get('/ProductListBySubCategory/{category}/{subcategory}',[ProductListController::class,'ProductListBySubCategory']);
Route::get('/ProductListByCategory/{category}',[ProductListController::class,'ProductListByCategory']);

//Slider Info
Route::get('/SendSliderInfo',[SliderController::class,'SendSliderInfo']);
Route::get('/productDetails/{code}',[ProductDetailsController::class,'productDetails']);

//Featured Product
Route::get('/featuredProducts',[FeaturedProductController::class,'featured_products']);

//Special Collection
Route::get('/special_collection',[SpecialCollectionController::class,'special_collection']);
//New Arrivals
Route::get('/new_arrivals',[NewArrivalController::class,'new_arrivals']);

//Notification History
Route::get('/notification_history',[NotificationController::class,'notification_history']);

//Product Search
Route::get('/ProductSearch/{key}',[ProductListController::class,'ProductSearch']);

//Suggested Products
Route::get('/SuggestedProducts/{subcategory}',[ProductListController::class,'SuggestedProducts']);

//Review Controller
Route::post('/postReview',[ProductReviewController::class,'postReview']);
Route::get('/getReview/{code}',[ProductReviewController::class,'getReview']);

//Add to cart
Route::post('/AddToCart',[CartController::class,'AddToCart']);
Route::get('/GetCartList/{mobile}',[CartController::class,'GetCartList']);
Route::get('/CountPriceItem/{mobile}',[CartController::class,'CountPriceItem']);
Route::get('/CountTotalPrice/{mobile}',[CartController::class,'CountTotalPrice']);
Route::post('/DeleteItem/{id}',[CartController::class,'DeleteItem']);


