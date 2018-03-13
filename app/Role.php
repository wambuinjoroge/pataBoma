<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected $fillable = ['slug','name','permissions'];

    public function user(){
        return $this->hasMany('App/Users');
    }
}
