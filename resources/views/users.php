<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class users extends Model
{
    use SoftDeletes;

    protected $fillable=['id','name','email','user_type','email_verified_at',
    'password','remeber_token','created_at','updated_at'];
    
}

