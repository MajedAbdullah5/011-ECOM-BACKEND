<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactModel;

class ContactController extends Controller
{
    function PostContactDetails(Request $request){
        $name  =  $request->input('name');
        $phone = $request->input('phone');
        $msg   = $request->input('msg');
        date_default_timezone_set("Asia/Dhaka");
        $contact_time = date("h:i:sa");
        $contact_date = date("d-m-y");
        return ContactModel::insert(['name'=>$name,'mobile'=>$phone,'message'=>$msg,'contact_date'=>$contact_date,'contact_time'=>$contact_time]);
    }
}
