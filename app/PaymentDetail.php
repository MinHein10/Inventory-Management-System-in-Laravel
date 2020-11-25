<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentDetail extends Model
{
    protected $table = "payment_details";
    protected $fillable = [
        "invoice_id",
        "current_paid_amount",
        "date",
    ];

    public function invoice(){
        return $this->belongsTo('App/Invoice','invoice_id');
    }
}
