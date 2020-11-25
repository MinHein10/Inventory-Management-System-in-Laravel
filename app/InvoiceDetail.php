<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InvoiceDetail extends Model
{
    protected $table = 'invoice_details';
    protected $fillable = [
        "date",
        "invoice_id",
        "category_id",
        "product_id",
        "selling_qty",
        "selling_price",
        "status",
    ];

    public function invoice(){
        return $this->belongsTo('App/Invoice','invoice_id');
    }

    public function category(){
        return $this->belongsTo('App/Category','category_id');
    }
    public function product(){
        return $this->belongsTo('App/Product','product_id');   
    }
    
}
