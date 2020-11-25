<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $table = 'invoices';
    protected $fillable = [
        "invoice_no",
        "date",
        "description",
        "status",
    ];

    public function invoice_detail(){
        return $this->hasOne('App/Invoice','invoice_id');
    }
}
