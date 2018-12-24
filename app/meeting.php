<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class meeting extends Model
{
    protected $fillable = ['time','place','date'];         
}
