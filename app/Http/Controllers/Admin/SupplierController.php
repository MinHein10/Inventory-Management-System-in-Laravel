<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Supplier;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliers = Supplier::all();
        return view('supplier/index',compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('supplier/add');
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
            "name"=>"required",
            "email"=>"required",
            "phone"=>"required",
            "address"=>"required",
        ]);

        $sql = new Supplier;
        $sql->name = $request->name;
        $sql->email = $request->email;
        $sql->phone = $request->phone;
        $sql->address = $request->address;
        $sql->save();
        return redirect(route('supplier.index'));
        
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
        $updatesupplier = Supplier::find($id);
        return view('supplier/edit',compact('updatesupplier'));
        
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
            "name"=>"required",
            "email"=>"required",
            "phone"=>"required",
            "address"=>"required",
        ]);

        $sql = Supplier::find($id);
        $sql->name = $request->name;
        $sql->email = $request->email;
        $sql->phone = $request->phone;
        $sql->address = $request->address;
        $sql->save();
        return redirect(route('supplier.index'));
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Supplier::where('id',$id)->delete();
        return redirect()->back();
    }
}
