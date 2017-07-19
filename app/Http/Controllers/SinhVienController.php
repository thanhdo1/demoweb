<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\SinhVien;
use DateTime;

class SinhVienController extends Controller
{
    public function getList () {
    	return SinhVien::orderBy('id','DESC')->get();
    }

    
}
