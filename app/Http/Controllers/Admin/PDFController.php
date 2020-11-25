<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Stockin;
use App\Category;
use App\Product;
use App\Supplier;
use App\User;
use DB;
use PDF;

class PDFController extends Controller
{

    function get_stock_data(){
        $stockdata = DB::table('stockins')->limit(10)->get();
        return $stockdata;
    }

    function pdf(){
        $pdf = \App::make('dompdf.wrapper');
        
        $pdf->loadHTML($this->convert_stock_data_to_html());
        return $pdf->stream();
    }

    function convert_stock_data_to_html(){
        $stock_category = DB::table('categories')->limit(10)->get();
        $stockdata = $this->get_stock_data();
        $output = '
        <h3 align="center">Stock In Information</h3>
        <table width="100%" style="border-collapse: collapse; border: 0px;">
          <tr>
            <th style="border: 1px solid; padding:12px;" width="20%">Categories</th>
            <th style="border: 1px solid; padding:12px;" width="20%">Products</th>
            <th style="border: 1px solid; padding:12px;" width="20%">Suppliers</th>
            <th style="border: 1px solid; padding:12px;" width="20%">Chalan</th>
            <th style="border: 1px solid; padding:12px;" width="20%">Initial Stock</th>
            <th style="border: 1px solid; padding:12px;" width="20%">Current Stock</th>
            <th style="border: 1px solid; padding:12px;" width="20%">Buying Price</th>
            <th style="border: 1px solid; padding:12px;" width="20%">Selling Price</th>
            <th style="border: 1px solid; padding:12px;" width="20%">Entry Date</th>
          </tr>
        ';
        foreach ($stockdata as $item){
            $output .= '
            <tbody>
            <tr>
                <td style="border: 1px solid; padding:12px;">Raw Materials</td>
              <td style="border: 1px solid; padding:12px;">'.$item->product_id.'</td>
              <td style="border: 1px solid; padding:12px;">'.$item->supplier_id.'</td>
              <td style="border: 1px solid; padding:12px;">'.$item->date.'</td>    
              <td style="border: 1px solid; padding:12px;">'.$item->quantity.'</td>
              <td style="border: 1px solid; padding:12px;">'.$item->quantity.'</td>
              <td style="border: 1px solid; padding:12px;">'.$item->buyingprice.'</td>
              <td style="border: 1px solid; padding:12px;">'.$item->sellingprice.'</td>
              
              
              <td style="border: 1px solid; padding:12px;">'.$item->created_at.'</td>
              
              
            </tr>
            </tbody>
            
            ';
        }
        $output .= '</table>';
        return $output;
    }
}
