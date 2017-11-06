<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Coin extends Model
{
    //
protected $table = 'coins';
protected $fillable = ['idUser', 'valueChange', 'timeChange', 'message',];
 

public static function getHistoryCoin($id){
	$historycoin = DB::table('coins')->where('idUser', '=', $id)->get();
	return $historycoin; 
}
}
