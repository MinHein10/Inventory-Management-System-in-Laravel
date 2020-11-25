<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Customer;
use App\Invoice;
use App\InvoiceDetail;
use App\PaymentDetail;
use App\Product;
use App\Stockin;
use App\Supplier;
use App\User;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $suppliers = DB::table('suppliers')->count();
        $customers = DB::table('customers')->count();
        $totalinvoice = DB::table('stockins')->sum('buyingprice');
        $totalquantity = DB::table('stockins')->sum('quantity');

        $totalsoldquantity  = DB::table('invoice_details')->sum('selling_qty');
        $totalsoldprice= DB::table('invoice_details')->sum('selling_price');

        $currentpaidamount = DB::table('payment_details')->sum('current_paid_amount');

        return view('adminpanel/template/dashboard',compact('suppliers','customers','totalinvoice','totalquantity','totalsoldquantity','totalsoldprice','currentpaidamount'));
    }
}
