<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $categorydata = Category::all();
        return view("category.index",compact('categorydata'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category/add');
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
            "name" => "required",
            "photo" => "required",
            "description" => "required",
        ]);

        if($request->hasFile('photo')){
            $img_name = 'LB_'.time().$request->photo->getClientOriginalName();
            $request->photo->move(public_path('uploads'),$img_name);
        }

        $sql = new Category;
        $sql->name = $request->name;
        $sql->photo = $img_name;
        $sql->description = $request->description;
        $sql->save();
        return redirect(route('categories.index'));
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
        $updatecategory = Category::find($id);
        return view('category/edit',compact('updatecategory'));
        
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
            "description"=>"required",
        ]);

        if($request->photo==""){
            $sql = Category::find($id);
            $sql->name = $request->name;
            $sql->description = $request->description;
            $sql->save();
            return redirect(route('categories.index'));
        }else{

            // Delete photo in public path
            $old = Category::where('id',$id)->select('photo')->first();
            unlink(public_path('uploads/'.$old->photo));



            // Insert photo in public path
            if($request->hasFile('photo')){
                $img_name = 'LB_'.time().$request->photo->getClientOriginalName();
                $request->photo->move(public_path('uploads'),$img_name);
            }

            $sql = Category::find($id);
            $sql->name = $request->name;
            $sql->photo = $img_name;
            $sql->description = $request->description;
            $sql->save();
            return redirect(route('categories.index'));
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
        Category::where('id',$id)->delete();
        return redirect()->back();
    }
}
