<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Sex extends Model
{
    //
protected $table = 'sexes';
protected $fillable = ['code',];


public static function getSex(){
	$sexes = DB::table('sexes')->get();
	return $sexes;
}
public static function insertSex($request){
	$code = $request['code'];
	$db = DB::table('sexes')->insertGetId(array('code'=>$code));
}
}
