<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = 'suppliers';
    protected $fillable = [
        "name", 
        "email",
        "phone",
        "address",
    ];


    public function stockin(){
        return $this->hasOne('App/Supplier','supplier_id');
    }
}
