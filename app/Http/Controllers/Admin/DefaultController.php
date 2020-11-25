<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Stockin;
use App\Product;
use App\Category;
use App\Supplier;
use Auth;
use DB;
use App\Invoice;
use App\InvoiceDetail;
use App\Payment;
use App\PaymentDetail;

class DefaultController extends Controller
{

    // public function getCategory(Request $request){
    //     $supplier_id = $request->supplier_id;
    //     $allCategory = Stockin::with(['category'])->select('category_id')->where('supplier_id',$supplier_id)->groupBy('category_id')->get();
    //     // dd($allCategory->toArray());
    //     return response()->json($allCategory);
    // }
    // public function getProduct(Request $request){
    //     $category_id = $request->category_id;
    //     // $allProduct = Product::where('category_id',$category_id)->get();
    //     // dd($allProduct->toArray());
    //     $allProduct = Stockin::with([category])
    //     return response()->json($allProduct);
    // }


    public function getStock(Request $request){
        $product_id = $request->product_id;
        // $stock = Stockin::where('id',$product_id)->first()->quantity;
        $stock = DB::table('stockins')->where('product_id',$product_id)->value('quantity');
        return response()->json($stock);
        // return $stock;
    }
    public function getPrice(Request $request){
        $product_id = $request->product_id;
        // $stock = Stockin::where('id',$product_id)->first()->sellingprice;
        $stock = DB::table('stockins')->where('product_id',$product_id)->value('sellingprice');
        return response()->json($stock);
    }
}
