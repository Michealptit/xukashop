<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
protected $table = 'orders';
protected $fillable = ['idUser', 'idProduct', 'type', 'status', 'codeQuality', 'location', 'codeSex', 'size', 'color', 'priceRoot', 'priceSale', 'ship', 'percent', 'profit',];

}
