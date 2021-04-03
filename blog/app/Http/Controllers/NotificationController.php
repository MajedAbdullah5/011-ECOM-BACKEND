<?php

namespace App\Http\Controllers;

use App\Models\Notification_Table;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    function notification_history(){
        return Notification_Table::orderBy('id','desc')->limit(50)->get();
    }
}
