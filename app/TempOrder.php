<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TempOrder extends Model
{
    //
protected $table = 'temp_orders';
protected $fillable = ['status', 'phone', 'message', 'imgOrder',];

}
