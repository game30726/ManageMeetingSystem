<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MeetingUser extends Model
{
    protected $table = 'adduser';

    protected $fillable = ['user_id','groupname','status'];     
    
     public function user(){
         return $this->belongToMany('User','Adduser');
     }
}
