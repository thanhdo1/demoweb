<?php

namespace App\Http\Controllers;
use App\Product;
use DateTime;
use App\TypeProduct;
use Illuminate\Http\Request;

class SanPhamController extends Controller
{
   public function getList () {
    	return Product::orderBy('id','DESC')->get();
    }
     public function getLoai () {
    	return TypeProduct::all();
    }
    public function getLienhe(){
    	return view('page.lienhe');
    }
    public function getGioithieu(){
    	return view('page.gioithieu');
    }
}
