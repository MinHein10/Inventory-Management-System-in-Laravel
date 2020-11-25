<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table="customers";
    protected $fillable=[
        "name",
        "email",
        "phone",
        "address",
    ];

    public function payment(){
        return $this->hasOne('App/Customer','customer_id');
    }
}
