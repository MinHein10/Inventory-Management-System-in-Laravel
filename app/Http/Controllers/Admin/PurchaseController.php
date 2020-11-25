<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Stockin;
use App\Category;
use App\Product;
use App\Supplier;
use App\User;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        // $purchases = Stockin::all();
        $purchases = Stockin::orderBy('date','asc')->orderBy('id','asc')->get();
        $users = User::all();
        return view('stockin/index',compact('purchases','users'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $stockcategories = Category::all();
        $stockproducts = Product::all();
        $stocksuppliers = Supplier::all();
        return view('stockin/add',compact('stockcategories','stockproducts','stocksuppliers'));
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
            "category_id"=>"required",
            "product_id"=>"required",
            "supplier_id"=>"required",
            "buyingprice"=>"required",
            "sellingprice"=>"required",
            "quantity"=>"required",
            "date"=>"required",
        ]);

        $sql = new Stockin;
        $sql->category_id = $request->category_id;
        $sql->product_id = $request->product_id ;
        $sql->supplier_id = $request->supplier_id ;
        $sql->buyingprice = $request->buyingprice ;
        $sql->sellingprice = $request->sellingprice ;
        $sql->quantity = $request->quantity ;
        $sql->date = $request->date ;
        $sql->save();
        return redirect(route('stockin.index'));
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
        $editstockin = Stockin::find($id);
        return view('stockin/quantityupdate',compact('editstockin'));
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
            "dropdownquantity"=>"required",
        ]);

        $sql = Stockin::find($id);
        $sql->quantity += $request-> dropdownquantity;
        $sql->save();
        return redirect(route('stockin.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Stockin::where('id',$id)->delete();
        return redirect()->back();
    }
}
