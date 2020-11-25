<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliers = DB::table('suppliers')->count();
        $customers = Customer::all();
        return view('adminpanel/template/dashboard',compact('suppliers'));

    }

}
