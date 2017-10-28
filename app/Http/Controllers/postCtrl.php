<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Tienich;
use Carbon\Carbon;

class postCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Post::getPost();
        return view('backend.posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $title = $request['title'];
        $content = $request['content'];
        $author = $request['author'];
         $carbon = new Carbon();
        $timePost =$carbon->format('Y-m-d H:i:s');// date("Y-m-d h:i");//date("Y-m-d h:i:s a", time());
       // dd($timePost);
        $slug = Tienich::convertTiengViet($title)."html";

        $imgPost = $request->file('imgPost')->getClientOriginalName(); 
        $imgPost = Tienich::convertTiengViet($imgPost);
        $current = Carbon::now();
        $imgPost = $current->format('Y-m-d-H-i-s')."-".$imgPost;
        $request->file('imgPost')->move('public/img_post', $imgPost);
        Post::insertPost($title, $content, $author, $slug, $imgPost, $timePost);
        return redirect()->route('admin.posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function searchPost(Request $request){
        $posts = Post::searchPost($request);
         return view('backend.posts.index')->with('posts', $posts);
    }
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
        Post::destroyPost($id);
         return redirect()->route('admin.posts.index');
    }
}
