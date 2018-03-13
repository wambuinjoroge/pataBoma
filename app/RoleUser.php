<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoleUser extends Model
{
    //add the functionality for the role_user table

    protected $fillable = [
        'role_id',
        'user_id'
    ];

}
