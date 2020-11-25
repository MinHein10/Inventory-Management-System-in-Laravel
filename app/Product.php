<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";
    protected $fillable = [
        "productname",
        "category_id",
        "images",
        "details",
    ];

    public function category(){
        return $this->belongsTo('App/Category','category_id');
    }

    public function stockin(){
        return $this->hasOne('App/Product','product_id');
    }
}
