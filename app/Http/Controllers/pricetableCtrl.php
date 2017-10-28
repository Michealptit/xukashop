<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class pricetableCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::getTablePrice();
        return view('backend.ChinhSachKD.price-table')->with('products', $products);
    }
    public function editprice($id){
        $products = Product::getProductById($id);
        return view('backend.ChinhSachKD.edit-price-table')->with('products', $products);
    }
    public function updateprice(Request $request){
        Product::updatePrice($request);
        return redirect()->route('admin.cskd.index');
    }

    public function searchPrice(Request $request){
        $products = Product::searchPrice($request);
      //  dd($products);
        return view('backend.ChinhSachKD.price-table')->with('products', $products);
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
