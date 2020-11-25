<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class testsales extends Model
{
    protected $table = 'testsales';
    protected $fillable = [
        "invoice_no",
        "date",
        "category_id",
        "product_id",
        "current_qty",
        "buying_qty",
        "remaining_qty ",
        "sellingprice",
        "total",
    ];
}
