<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequestCreateUser extends Model
{
    //
protected $table = 'request_create_users';
protected $fillable = ['status', 'phone', 'pass'];

}
