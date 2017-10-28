<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Producer extends Model
{
    //
protected $table = 'producers';
protected $fillable = ['name',];



public static function getProducers(){
	$producers = DB::table('producers')->get();
	return $producers;
}
public static function insertProducers($request){
	$name = $request['name'];
	$db = DB::table('producers')->insertGetId(array('name'=>$name));
}
public static function destroyProducers($id){

	$db = DB::table('producers')->where('id', '=', $id)->delete();
}
}
