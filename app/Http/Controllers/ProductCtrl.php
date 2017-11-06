<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catalog;
use App\Producer;
use App\Product;
use File, Input;
use App\UploadFile;
use App\Http\Requests\UpFileRequest;

use App\Tienich;

use Carbon\Carbon;

use App\Post;
use App\Quality;
use App\Sex;
class ProductCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCatalogbyProducer($idProducer){
            $catalogs = Catalog::getCatalogByProducer($idProducer);
            foreach($catalogs as $lt)
            {
            echo "<option value='".$lt->id."'>".$lt->name."</option>";   
            }
            
        }


    public function index()
    {
        //
        
        $products = Product::getProductShow();
        //dd($products);
        return view('backend.products.index')->with('products', $products);
    }
    public function hide(){
         $products = Product::getProductHide();
        dd($products);
        return view('backend.products.hide')->with('products', $products);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $qualities = Quality::getQuality();
        $producers = Producer::getProducers();
        $sexes = Sex::getSex();
        return view('backend.products.create')->with('producers', $producers)->with('qualities', $qualities)->with('')->with('sexes', $sexes);
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
          //  dd($request);
            $idProducer=$request['idProducer'];
            $idCatalog =$request['idCatalog'];
            $idQuality =$request['idQuality'];
            $idSex     =$request['idSex'];
            $name = $request['name'];
            $price     =$request['price'];
            $detail    =$request['detail'];
            // thực hiện đổi tên và di chuyển vào thư mục
            $imgProduct = $request->file('imgProduct')->getClientOriginalName();  // lấy tên file\
            $imgProduct = Tienich::convertTiengViet($imgProduct);
            $current = Carbon::now();
            $imgProduct = $current->format('Y-m-d-H-i-s')."-".$imgProduct;
            $request->file('imgProduct')->move('public/img_product_main', $imgProduct); 
            //$imgProduct = "public/img_product_main/".$imgProduct;
            // insert bản ghi vào DB
            $slug = Tienich::convertTiengViet($name).".html";
            Product::insertGetId($idProducer,  $idCatalog, $idQuality, $idSex, $name ,$price, $detail, $imgProduct, $slug);
            return redirect()->route('admin.products.index');
          //  dd($imgProducts);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function clickHide($id){
        Product::clickHide($id);
        return redirect()->route('admin.products.index');
    }
    public function clickShow($id){
         Product::clickShow($id);
         return redirect()->route('admin.products.index');
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
    }
    // hien thi san pham dang fb 
    public function fIndex(){
        $productsramdom = Product::fgetRamdomProduct();
        $postsramdom = Post::fgetRamdomPost();
        $products = Product::fgetProducts();
      // dd($products);
        return view('fontend.index')->with('products', $products)->with('productsramdom', $productsramdom)->with('postsramdom', $postsramdom);
    }
    // hien thi gia cho ctv
    public function fPriceAgent(){
        $products = Product::fgetPriceAgent();
        return view('fontend.product.priceAgent')->with('products', $products);
    }
    // hien thi san pham dang luoi co phan trang
    public function fshopfull(){
        $products = Product::fgetShopfull();
        return view('fontend.product.shopfull')->with('products', $products);
        
    }
}
