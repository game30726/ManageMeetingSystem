<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Adduser extends Model
{
    protected $filable =[ 'user_id','meeting_id','status' ];
}
