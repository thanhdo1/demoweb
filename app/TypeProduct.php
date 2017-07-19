<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeProduct extends Model
{
    protected $table = 'type_products';

    protected $guarded = [];
    public function product(){
    	return $this->hasMany('App\Product','id_type','id');
    }
}
