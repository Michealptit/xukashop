<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Product;
class fPostCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $productsramdom = Product::fgetRamdomProduct();
        $postsramdom = Post::fgetRamdomPost();
       // dd($productsramdom);
        $posts = Post::getPostforUser();
        return view('fontend.posts.index')->with('posts', $posts)->with('productsramdom', $productsramdom)->with('postsramdom', $postsramdom);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $productsramdom = Product::fgetRamdomProduct();
        $postsramdom = Post::fgetRamdomPost();
       // dd($productsramdom);
        return view('fontend.posts.create')->with('productsramdom', $productsramdom)->with('postsramdom', $postsramdom);
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
         $productsramdom = Product::fgetRamdomProduct();
        $postsramdom = Post::fgetRamdomPost();
        $posts= Post::getPostByIdforUser($id);
        return view('fontend.posts.show')->with('posts', $posts)->with('productsramdom', $productsramdom)->with('postsramdom', $postsramdom);
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
