<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stockin extends Model
{
    protected $table = 'stockins';
    protected $fillable = [
        "category_id",
        "product_id",
        "supplier_id",
        "buyingprice",
        "sellingprice",
        "quantity",
        "date",
    ];


    public function category(){
        // return $this->belongsTo('App/Category',"category_id");
        return $this->belongsTo(Category::class,'category_id','id');
    }
    public function product(){
        return $this->belongsTo('App/Product','product_id');
        
    }
    public function supplier(){
        // return $this->belongsTo('App/Supplier','supplier_id');
        return $this->belongsTo(Supplier::class,'supplier_id','id');
    }

    

}
