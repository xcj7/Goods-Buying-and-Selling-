<?php

namespace App\Http\Controllers;

use App\Models\product;

use App\Http\Requests\StoreproductRequest;
use App\Http\Requests\UpdateproductRequest;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

////

// use Illuminate\Support\Facades\DB;
// use Redirect,Response,File;
 
// use Illuminate\Support\Facades\Storage;
////


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreproductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreproductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateproductRequest  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateproductRequest $request, product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        //
    }
    public function APIList(){
       
        // console.log("ddddddddddddddddddd"); 
        return Product::all();
    }
    public function APIPost(Request $req){
       // console.log("cccccccccccccccc"); 
        // $karimdata=$request->session()->get('karimkey');
        $karimdata=Session::get('karimkey');
       
        $req->file('image');
        $fileName="";
        if ( $req->has('image')){
            $image = $req->file('image');
           
            $fileName = $image->getClientOriginalName() . time() . "." . $image->getClientOriginalExtension();
            $image->move('./shop/', $fileName);    
        }
       
        $product = new Product();
        $product->shop_id = $req->shop_id;
        $product->p_type = $karimdata;
        $product->p_name = $req->p_name;
        $product->p_price = $req->p_price;
        $product->image = $fileName;
        if( $product->p_price > 0)
        {
            $product->save();
        }

      
    

        return  $product;
    }







    public function APIProduct_details(Request $request)
    {
        
        $stu = product::where('id',$request->id)->first();
        if($stu)
        {
           return $stu;
        }
    }

    

    public function delete_product(Request $request)
    {
        
        $stu = product::where('id',$request->id)->first();
$id=$request->id;
        // if($stu)
        // {
        //    return $stu;
        // }

        if($stu){
            // product::find($stu)->destroy();
            product::destroy($id);
        }
    }
 

    public function product_edited(Request $req)
    {
        // $value = $request->session()->get('user');
        $product = product::where('id',$req->id)->first();

        $req->file('image');
        $fileName="";
        if ( $req->has('image')){
            $image = $req->file('image');
           
            $fileName = $image->getClientOriginalName() . time() . "." . $image->getClientOriginalExtension();
            $image->move('./shop/', $fileName);    
        }
       
        
        $product->p_name = $req->p_name;
        $product->p_price = $req->p_price;
        $product->image = $fileName;
       if($product)
       {
        $product->save();
        // return redirect()->route('profile');
       }
      
    }
    public function APIProducts(){
        return Product::all();
    }

}

   

