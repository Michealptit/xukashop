<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    //
protected $table = 'inventories';
protected $fillable = ['timeInput', 'priceProduct', 'priceShip', 'total',];


}