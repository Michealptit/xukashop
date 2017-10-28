<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;
class Product extends Model
{
    //
protected $table = 'products';
protected $fillable = ['idProducer', 'idCatalog', 'idQuality', 'idSex', 'name', 'price', 'slCon', 'slBan', 'status', 'detail', 'imgProduct',];
public static function insertGetId($idProducer,  $idCatalog, $idQuality, $idSex, $name, $price, $detail, $imgProduct, $slug){
	$db = DB::table('products')->insertGetId(array('idProducer'=>$idProducer, 'idCatalog'=>$idCatalog, 'idQuality'=>$idQuality, 'idSex'=>$idSex, 'name'=>$name, 'price'=>$price, 'detail'=>$detail, 'imgProduct'=>$imgProduct, 'slug'=>$slug));
}

public static function getProductShow(){
	$products = DB::table('products')->leftJoin('producers', 'products.idProducer', '=','producers.id')->leftJoin('catalogs', 'products.idCatalog', '=','catalogs.id')->where('status','=', 'show')->leftJoin('qualities', 'products.idQuality', '=', 'qualities.id')->leftJoin('sexes', 'products.idSex', '=', 'sexes.id')->where('status', '=', 'show')->get(array('products.id AS id', 'producers.name AS producers_name', 'catalogs.name AS catalogs_name', 'products.name AS name', 'qualities.code as qualities_code', 'sexes.code AS sexes_code', 'products.price AS price', 'products.slCon AS slCon', 'products.slBan AS slBan', 'products.detail AS detail', 'products.imgProduct AS imgProduct'));
	return $products;
}
public static function getProductHide(){
	$products = DB::table('products')->leftJoin('producers', 'products.idProducer', '=','producers.id')->leftJoin('catalogs', 'products.idCatalog', '=','catalogs.id')->where('status','=', 'show')->leftJoin('qualities', 'products.idQuality', '=', 'qualities.id')->leftJoin('sexes', 'products.idSex', '=', 'sexes.id')->where('status', '=', 'hide')->get(array('products.id AS id', 'producers.name AS producers_name', 'catalogs.name AS catalogs_name', 'products.name AS name', 'qualities.code as qualities_code', 'sexes.code AS sexes_code', 'products.price AS price', 'products.slCon AS slCon', 'products.slBan AS slBan', 'products.detail AS detail', 'products.imgProduct AS imgProduct'));
	return $products;
}
public static function clickShow($id){
	$status = "show";
	DB::table('products')->where('id', '=', $id)->update(array('status'=>$status));
}
public static function clickHide($id){
	$status = "hide";
	DB::table('products')->where('id', '=', $id)->update(array('status'=>$status));
}


//==== CHINH SÁCH KD 
public static function getTablePrice(){
	$products = DB::table('products')->leftJoin('producers', 'products.idProducer', '=','producers.id')->leftJoin('catalogs', 'products.idCatalog', '=','catalogs.id')->where('status','=', 'show')->leftJoin('qualities', 'products.idQuality', '=', 'qualities.id')->leftJoin('sexes', 'products.idSex', '=', 'sexes.id')->where('status','=', 'show')->get(array('products.id AS id', 'producers.name AS producers_name', 'catalogs.name AS catalogs_name', 'products.name AS name', 'qualities.code as qualities_code', 'sexes.code AS sexes_code', 'products.price AS price', 'products.detail AS detail', 'products.imgProduct AS imgProduct'));
	return $products;
}
public static function getProductById($id){
	$products = DB::table('products')->where('id', '=', $id)->get();
	return $products;
}
public static function updatePrice($request){
	$id = $request['id'];
	$price = $request['price'];
	DB::table('products')->where('id', '=', $id)->update(array('price'=>$price));
}
public static function searchPrice($request){
	$key = $request['key'];
	$products = DB::table('products')->leftJoin('producers', 'products.idProducer', '=','producers.id')->leftJoin('catalogs', 'products.idCatalog', '=','catalogs.id')->where('status','=', 'show')->leftJoin('qualities', 'products.idQuality', '=', 'qualities.id')->leftJoin('sexes', 'products.idSex', '=', 'sexes.id')->where('status','=', 'show')->where('products.name', 'like', '%'.$key.'%')->get(array('products.id AS id', 'producers.name AS producers_name', 'catalogs.name AS catalogs_name', 'products.name AS name', 'qualities.code as qualities_code', 'sexes.code AS sexes_code', 'products.price AS price', 'products.detail AS detail', 'products.imgProduct AS imgProduct'));
	return $products;
}


/////============== search 

public static function searchHome($request){
	$key = $request['key'];
	$name = DB::table()->where('name', 'like', "%".$key."%")->get();
	return $name;
}

}
