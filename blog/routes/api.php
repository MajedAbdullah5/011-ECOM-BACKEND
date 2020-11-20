<?php

use App\Http\Controllers\CategoryDetailsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SiteInfoController;
use App\Http\Controllers\VisitorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
