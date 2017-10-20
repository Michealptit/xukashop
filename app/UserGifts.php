<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserGifts extends Model
{
    //

protected $table = 'user_gifts';
protected $fillable = ['idUser', 'idGift', 'timeReceive', 'message',];

}
