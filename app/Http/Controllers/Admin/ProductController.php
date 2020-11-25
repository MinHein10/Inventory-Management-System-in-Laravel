<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('product/index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('product/add',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
          "productname"=>"required",
          "category_id"=>"required",
          "images"=>"required",
          "details"=>"required",
        ]);

        if($request->hasFile('images')){
            $img_name = 'LB_'.time().$request->images->getClientOriginalName();
            $request->images->move(public_path('uploads'),$img_name);
        }

        $sql = new Product;
        $sql->productname = $request->productname;
        $sql->category_id = $request->category_id;
        $sql->images = $img_name;
        $sql->details = $request->details;
        $sql->save();
        return redirect(route('products.index'));
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
        $updatecategory = Category::all();
        $updateproducts = Product::find($id);
        return view('product/update',compact('updatecategory','updateproducts'));

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
        $this->validate($request,[
            "productname"=>"required",
            "category_id"=>"required",
            "details"=>"required",
        ]);

        if($request->images==""){
            $sql = Product::find($id);
            $sql->productname = $request->productname;
            $sql->category_id = $request->category_id;
            $sql->details = $request->details;
            $sql->save();
            return redirect(route('products.index'));
        }else {

            //Delete photo into public path
            $old = Product::where('id',$id)->select('images')->first();
            unlink(public_path('uploads/'.$old->images));

            //Insert photo into public path
            if($request->hasFile('images')){
                $img_name = 'LB_'.time().$request->images->getClientOriginalName();
                $request->images->move(public_path('uploads'),$img_name);
            }

            $sql = Product::find($id);
            $sql->productname = $request->productname;
            $sql->category_id = $request->category_id;
            $sql->images = $img_name;
            $sql->details = $request->details;
            $sql->save();
            return redirect(route('products.index'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::where('id',$id)->delete();
        return redirect()->back();
    }
}
