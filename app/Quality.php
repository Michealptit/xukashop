<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Quality extends Model
{
    //
protected $table = 'qualities';
protected $fillable = ['code',];

public static function getQuality(){
	$qualities = DB::table('qualities')->get();
	return $qualities;
}
public static function getQualityById($id){
	$qualities = DB::table('qualities')->where('id', '=', $id)->get();
	return $qualities;
}
public static function insertQuality($request){
	$code = $request['code'];
	$db = DB::table('qualities')->insertGetId(array('code'=>$code));
	}
public static function upateQuality($request, $id){
	$code = $request['code'];
	$db = DB::table('qualities')->where('id', '=', $id)->update(array('code'=>$code));

}
}
