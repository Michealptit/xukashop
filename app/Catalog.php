<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Catalog extends Model
{
    //
 protected $table = 'catalogs';
 protected $fillable = ['id', 'idProducer', 'name',];
 

public static function getCatalog(){
	$catalogs = DB::table('catalogs')->join('producers', 'catalogs.idProducer', '=', 'producers.id')->get(array('catalogs.id AS id', 'producers.name AS producer_name', 'catalogs.name AS name'));
	return $catalogs;
}
public static function insertCatalog($request){
	$name = $request['name'];
	$idProducer = $request['idProducer'];
	$db = DB::table('catalogs')->insertGetId(array('idProducer'=>$idProducer, 'name'=>$name));
}
public static function destroyCatalog($id){
	DB::table('catalogs')->where('id', '=', $id)->delete();
}
// ajax
public static function getCatalogByProducer($idProducer){
	$catalogs =  DB::table('catalogs')->where('idProducer', '=', $idProducer)->get();
	return $catalogs;
}
}
