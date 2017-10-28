<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Color extends Model
{
    //


public static function getColor(){
	$colors = DB::table('colors')->get();
	return $colors;
}
public static function insertColor($request){
	$code = $request['code'];
	$colors = DB::table('colors')->insertGetId(array('code'=>$code));
}
public static function getColorById($id){
	$colors = DB::table('colors')->where('id', '=', $id)->get();
	return $colors;
}
public static function updateColor($request, $id){
	$code = $request['code'];
	$db = DB::table('colors')->where('id', '=', $id)->update(array('code'=>$code));
}
public static function destroyColor($id){
	DB::table('colors')->where('id', '=', $id)->delete();

}
}
