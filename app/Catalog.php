<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    //
 protected $table = 'products';
 protected $fillable = ['idProducer', 'idCatalog', 'idQuality', 'idSex', 'price', 'slCon', 'slBan', 'status', 'detail', 'urlImg',];
 

}
