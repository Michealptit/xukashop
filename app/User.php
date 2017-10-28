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
        'name', 'email', 'password','phone', 'birthday', 'sex', 'email', 'address', 'img_avatar', 'level', 'actived', 'code','hobby', 'married', 'office', 'url_facebook',
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
        $password = Crypt::encrypt('123456');
        $db = DB::table('users')->insertGetId(array('phone'=>$phone, 'name'=>$name, 'address'=>$address, 'password'=>$password));
    }
    public static function searchCustomer($request){
        $key = $request['key'];
        $customer = DB::table('users')->where('phone', 'like', '%'.$key.'%')->get();
        return $customer;
    }
    public static function destroyCustomerById($id){
    DB::table('users')->where('id','=',$id)->delete();
}






}
