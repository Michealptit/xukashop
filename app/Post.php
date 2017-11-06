<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Post extends Model
{
    //
protected $table = 'posts';
protected $fillable = ['title', 'imgPost', 'content', 'slug', 'timePost', 'idUser',];

public static function insertPost($title, $content, $idUser, $slug, $imgPost, $timePost){
	DB::table('posts')->insertGetId(array('title'=>$title, 'content'=>$content, 'slug'=>$slug, 'idUser'=>$author, 'timePost'=>$timePost, 'imgPost'=>$imgPost));
}
public static function getPost(){
 	$posts = DB::table('posts')->get();
 	return $posts;
}
public static function searchPost($request){
		$key = $request['key'];
		$posts = DB::table('posts')->where('title', 'like', "%".$key."%")->get();
		return $posts;
	}
public static function destroyPost($id){
	DB::table('posts')->where('id', '=', $id)->delete();
}
// PHIA NGUOI DUNG 
public static function getPostforUser(){
	$posts = DB::table('posts')->orderBy('id', 'desc')->select('id','title', 'imgPost', 'content', 'idUser', 'timePost')->paginate(5);
	return $posts;
}
public static function getPostByIdforUser($id){
	$posts = DB::table('posts')->where('id', '=', $id)->get();
	return $posts;
	}
// lay ngau nhien 3 ban ghi len 
public static function fgetRamdomPost(){
		$posts = DB::table('posts')->inRandomOrder()->take(6)->select('id','title', 'imgPost', 'content', 'idUser', 'timePost')->get();
		return $posts;

	}
}
