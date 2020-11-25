<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = "payments";
    protected $fillable = [
        "invoice_id",
        "customer_id",
        "paid_status",
        "paid_amount",
        "due_amount",
        "total_amount",
        "discount_amount",
    ];

    public function invoice(){
        return $this->belongsTo('App/Invoice','invoice_id');
    }

    public function customer(){
        return $this->belongsTo('App/Customer','customer_id');
    }

}
