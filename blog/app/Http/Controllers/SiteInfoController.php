<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteInfoModel;

class SiteInfoController extends Controller
{
   function SendSiteInfo(){
       return SiteInfoModel::get();
   }
}
