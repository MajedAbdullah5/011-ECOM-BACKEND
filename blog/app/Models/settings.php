<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class settings extends Model
{
    public $table='settings';
    public $primaryKey='id';
    public $incrementing =true;
}
