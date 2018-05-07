<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HouseUser extends Model
{
    //
    protected $fillable = [
        'house_id',
        'user_id'
    ];
}
