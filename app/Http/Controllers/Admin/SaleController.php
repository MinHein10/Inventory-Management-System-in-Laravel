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
use App\testsales;
use App\Customer;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $invoicedata = testsales::orderBy('date','asc')->orderBy('id','asc')->get();

        $invoice = Invoice::orderBy('date','asc')->orderBy('id','asc')->get();
        $invoicedetail = InvoiceDetail::orderBy('date','asc')->orderBy('id','asc')->get();
        $payment = Payment::all();
        $paymentdetail= PaymentDetail::orderBy('date','asc')->orderBy('id','asc')->get();

        
        return view('stockout.index',compact('invoice','invoicedetail','payment','paymentdetail'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['products'] = Product::all();
        $data['categories'] = Category::all();
        $data['salestock'] = Stockin::all();
        $data['customers'] = Customer::all();
        $data['date']=date('Y-m-d');

        $invoice_data = Invoice::orderBy('id','desc')->first();
        if($invoice_data==null){
            $firstReg = '0';
            $data['invoice_no']=$firstReg+1;
        }else{
            $invoice_data = Invoice::orderBy('id','desc')->first()->invoice_no;
            $data['invoice_no']=$invoice_data+1;
        }
        return view('stockout.add',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        //     if($request->product_id==null){
        //         return redirect()->back();
        //     }else {
        //         $count_product = count((array)$request->product_id);
        //         for($i=0;$i<$count_product;$i++){
        //             $sql = new testsales;
        //             $sql->invoice_no = $request->invoice[$i];
        //             $sql->date = date('Y-m-d',strtotime($request->date[$i]));
        //             $sql->category_id = $request->category_id[$i];
        // $sql->product_id = $request->product_id[$i];
        // $sql->current_qty = $request->current_stock_qty[$i];
        // $sql->buying_qty = $request->buying_qty[$i];
        // $sql->remaining_qty = ($request->current_stock_qty[$i])-($request->buying_qty[$i]) ;
        // $sql->remaining_qty = "0";
        // $sql->sellingprice = $request->selling_price    [$i];
        // $sql->total = ($request->buying_qty[$i]) * ($request->selling_price[$i]) ;
        // $sql->total = "0";
        // $sql->save();
        // return redirect(route('stockout.index'));


                if($request->product_id==null){
                    return redirect()->back();
                }else{
                    $invoice = new Invoice();
                    $invoice->invoice_no = $request->invoice_no;
                    $invoice->date = date('Y-m-d',strtotime($request->date));
                    $invoice->description = $request->description;
                    $invoice->status = '0';
                    DB::transaction(function() use($request,$invoice){
                        if($invoice->save()){
                            $count_product = count((array)$request->product_id);
                            for ($i=0; $i<$count_product ; $i++) { 
                                $invoicedetails = new InvoiceDetail();
                                $invoicedetails->date = date('Y-m-d',strtotime($request->date));
                                $invoicedetails->invoice_id = $invoice->id;
                                $invoicedetails->category_id = $request->category_id[$i];
                                $invoicedetails->product_id = $request->product_id[$i];
                                $invoicedetails->selling_qty = $request->buying_qty;
                                $invoicedetails->selling_price = $request->selling_price;
                                $invoicedetails->status = '1';
                                $invoicedetails->save();
                            }
                            if($request->customer_id=='0'){
                                $customer = new Customer();
                                $customer->name = $request->name;
                                $customer->email = $request->email;
                                $customer->phone = $request->phone;
                                $customer->address = $request->address;
                                $customer->save();
                                $customer_id = $customer->id;
                            }else{
                                $customer_id = $request->customer_id;

                            }
                            $payment = new Payment();
                            $paymentdetails = new PaymentDetail();

                            $payment->invoice_id = $invoice->id;
                            $payment->customer_id = $customer_id;
                            $payment->paid_status = $request->paid_status;
                            // $payment->paid_amount = $request->paid_amount;
                            $payment->discount_amount = '0';
                            
                            // Maintain
                            $payment->total_amount = $request->selling_price[$i];
                            // Maintain
                            
                            if($request->paid_status=='full_paid'){
                                $payment->paid_amount = ($request->buying_qty[$i]) * ($request->selling_price[$i]);
                                $payment->due_amount = '0';
                                $paymentdetails->current_paid_amount = ($request->buying_qty[$i]) * ($request->selling_price[$i]);

                            }elseif ($request->paid_status=='full_due') {

                                $payment->paid_amount = '0';
                                $payment->due_amount = ($request->buying_qty[$i]) * ($request->selling_price[$i]);
                                $paymentdetails->current_paid_amount = '0';
                            
                            }elseif ($request->paid_status=='partical_paid') {
                                
                                $payment->paid_amount = $request->paid_amount;

                                $payment->due_amount = ($request->selling_price[$i])-($request->paid_amount);
                                
                                $paymentdetails->current_paid_amount = $request->paid_amount;
                            }
                            $payment->save();
                            $paymentdetails->invoice_id = $invoice->id;
                            $paymentdetails->date = date('Y-m-d',strtotime($request->date));
                            $paymentdetails->save();
                        }
                    });
                }                

                return redirect(route('stockout.index'));
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
