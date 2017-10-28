<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Post extends Model
{
    //
protected $table = 'posts';
protected $fillable = ['title', 'imgPost', 'content', 'slug', 'timePost', 'author',];

public static function insertPost($title, $content, $author, $slug, $imgPost, $timePost){
	DB::table('posts')->insertGetId(array('title'=>$title, 'content'=>$content, 'slug'=>$slug, 'author'=>$author, 'timePost'=>$timePost, 'imgPost'=>$imgPost));
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
}
