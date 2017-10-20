<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
protected $table = 'products';
protected $fillable = ['idProducer', 'idCatalog', 'idQuality', 'idSex', 'price', 'slCon', 'slBan', 'status', 'detail', 'imgProduct',];

}
