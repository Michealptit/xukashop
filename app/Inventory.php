<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Inventory extends Model
{
    //
protected $table = 'inventories';
protected $fillable = ['timeInput', 'priceProduct', 'priceShip', 'total',];


public static function getInventory(){
	$inventory = DB::table('inventories')->get();
	return $inventory;
}
public static function insertInventory($request){
	    $current = Carbon::now();
        $timeInputt = $current->format('Y-m-d-H-i-s');
		$priceProduct = $request['priceProduct'];
		$priceShip = $request['priceShip'];
		$total = $priceProduct + $priceShip;
		DB::table('time')->insertGetId(array('timeInputt'=>$timeInputt, 'priceProduct'=>$priceProduct, 'priceShip'=>$priceShip));
	}
}
