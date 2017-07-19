<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   protected $table = 'products';

    protected $guarded = [];
    public function product(){
    	return $this->hasMany('App\TypeProduct','id_type','id');
    }
}
