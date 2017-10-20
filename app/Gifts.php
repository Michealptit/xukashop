<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gifts extends Model
{
    //
protected $table = 'gifts';
protected $fillable = ['name', 'price', 'desc', 'timeCreated', 'status', 'sum',];

}
