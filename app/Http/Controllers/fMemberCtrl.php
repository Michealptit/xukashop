<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Tienich;
use Carbon\Carbon;
use App\Sex;
use App\Post;
use App\Product;
class fMemberCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        $productsramdom = Product::fgetRamdomProduct();
        $postsramdom = Post::fgetRamdomPost();
        $members = User::fgetUser($id);
        return view('fontend.members.infor')->with('members',$members)->with('productsramdom', $productsramdom)->with('postsramdom', $postsramdom);
    }
    public function fupAvatar($id){
        //echo "axxxx";
       return view('fontend.members.upavatar')->with('id', $id);
    }
    public function fupLoadAvatar(Request $request){
        $id = $request['id'];
        $img_avatar = $request->file('img_avatar')->getClientOriginalName();  // lấy tên file\
        $img_avatar = Tienich::convertTiengViet($img_avatar);
        $current = Carbon::now();
        $img_avatar = $current->format('Y-m-d-H-i-s')."-".$img_avatar;
        $request->file('img_avatar')->move('public/img_avatar', $img_avatar);
        // toi uu anh

        // insert tên ảnh vào DB
        User::favatar($id, $img_avatar);
        // xóa ảnh cũ 
            //File::delete('$url_avatar');
        return redirect()->route('shop.member.infor', ['id'=>$id]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $productsramdom = Product::fgetRamdomProduct();
        $postsramdom = Post::fgetRamdomPost();
        $user = User::getUserById($id);
        $sexs = Sex::getSex();
        return view('fontend.members.edit')->with('user', $user)->with('sexs', $sexs)->with('productsramdom', $productsramdom)->with('postsramdom', $postsramdom);;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $id = $request['id'];
        User::updateUser($request);
        return redirect()->route('shop.member.infor', ['id'=>$id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
