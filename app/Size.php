<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Size extends Model
{
    //
public static function getSize(){
	$sizes = DB::table('sizes')->get();
	return $sizes;
}
public static function insertSize($request){
	$code = $request['code'];
	DB::table('sizes')->insertGetId(array('code'=>$code));
}
}
