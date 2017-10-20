<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coin extends Model
{
    //
protected $table = 'coins';
protected $fillable = ['idUser', 'valueChange', 'timeChange', 'message',];
 

}
