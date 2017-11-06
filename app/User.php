<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Crypt;
use DB;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','phone', 'birthday', 'money', 'sex', 'email', 'address', 'img_avatar', 'level', 'actived', 'code','hobby', 'married', 'office', 'url_facebook',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
//=============== Phần Customer 
    public static function getCustomer(){
        $customer = DB::table('users')->where('role', '=', 'customer')->orderBy('name', 'asc')->get();
        return $customer;
    }
    public static function getCustomerById($id){
        $customer = DB::table('users')->where('id', '=', $id)->get();
        return $customer;
    }
    public static function insertCustomer($request){
        $phone =  $request['phone'];
        $name = $request['name'];
        $address =  $request['address'];
        $password = bcrypt('123456');
        $img_avatar = "default.jpg";
        $db = DB::table('users')->insertGetId(array('phone'=>$phone, 'name'=>$name, 'address'=>$address, 'password'=>$password, 'img_avatar'=>$img_avatar));
    }
    public static function searchCustomer($request){
        $key = $request['key'];
        $customer = DB::table('users')->where('phone', 'like', '%'.$key.'%')->get();
        return $customer;
    }
    public static function destroyCustomerById($id){
    DB::table('users')->where('id','=',$id)->delete();
}
//######################## PHIA CONG TAC VIEN
    public static function getCtvs(){
        $ctvs = DB::table('users')->where('role', '=', 'ctv')->orderBy('name', 'asc')->get();
        return $ctvs;
    }
    public static function getCtvById($id){
        $ctvs = DB::table('users')->where('id', '=', $id)->get();
        return $ctvs;
    }
    public static function searchCtv($request){
        $key = $request['key'];
        $ctvs = DB::table('users')->where('phone', 'like', '%'.$key.'%')->get();
        return $ctvs;
    }
    public static function insertCtv($request){
        $phone =  $request['phone'];
        $name = $request['name'];
        $address =  $request['address'];
        $password = bcrypt('123456');
        $role = "ctv";
        $img_avatar = "default.jpg";
        $db = DB::table('users')->insertGetId(array('phone'=>$phone, 'name'=>$name, 'address'=>$address, 'password'=>$password, 'role'=>$role, 'img_avatar'=>$img_avatar));
    }
    //+++++++++++++++++++ PHÍA NGƯỜI DÙNG. 
    public static function fgetUser($id){
        $members = DB::table('users')->where('id', '=', $id)->get();
        return $members;
    }
    public static function favatar($id, $img_avatar){
        DB::table('users')->where('id', '=', $id)->update(array('img_avatar'=>$img_avatar));
    }
    public static function getOldAvatar($id){
        $img_avatar = DB::table('users')->where('id', '=', $id)->select('img_avatar');
        return $img_avatar;
    }
    public static function getUserById($id){
        $user = DB::table('users')->where('id', '=', $id)->get();
        return $user;
    }
    public static function updateUser($request){
        $id = $request['id'];
        $name = $request['name'];
        $email = $request['email'];
        $url_facebook = $request['url_facebook'];
        $birthday = $request['birthday'];
        $sex = $request['sex'];
        $address = $request['address'];
        $hobby = $request['hobby'];
        $married = $request['married'];
        $office = $request['office'];
        DB::table('users')->where('id', '=', $id)->update(array('name'=>$name, 'email'=>$email, 'url_facebook'=>$url_facebook, 'birthday'=>$birthday, 'sex'=>$sex, 'address'=>$address, 'hobby'=>$hobby, 'married'=>$married, 'office'=>$office));
    }
    public static function getUserCoin($id){
        $coin = DB::table('users')->where('id', '=', $id)->get(); 
        return $coin;
    }


}
