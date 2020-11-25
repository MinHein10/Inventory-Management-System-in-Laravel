<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table="categories";
    protected $fillable=[
        "name",
        "photo",
        "description",
    ];

    public function product(){
        return $this->hasOne('App/Category','category_id');
    }

    
}
