<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class meeting extends Model
{
    protected $table = 'meetings';

    protected $fillable = ['name','time','place','date','group_meeting'];     
    
    public function user(){
        return $this->belongToMany('User','Adduser');
    }
}
