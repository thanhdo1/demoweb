<?php

namespace App\Http\Controllers;
use App\Product;
use DateTime;
use App\TypeProduct;
use Illuminate\Http\Request;
use App\User;
use Hash;
use Auth;

class SanPhamController extends Controller
{
   public function getList () {
    	return view('HienThiSP');
    }
    public function getSP(){
        return Product::all();
    }
     public function getLoai () {
    	return TypeProduct::all();
    }
    public function getGioithieu(){
        return view('page.gioithieu');
    }
    public function getLienhe(){
        return view('page.lienhe');
    }
    public function getLogin(){
        return view('page.dangnhap');
    }
    public function getRegister(){
        return view('page.dangky');
    }
    public function postRegister(Request $req){
        $this->validate($req,[
                'email'=>'required|email|unique:users,email',
                'password'=>'required|min:6|max:20',
                'fullname'=>'required',
                're_password'=>'required|same:password'
            ],
            [
                'email.required'=>'Vui lòng nhập email',
                'email.email'=>'Không đúng định dạng email',
                'email.unique'=>'Email đã có người sử dụng.',
                'password.required'=>'Vui lòng nhập password',
                're_password.same'=>'Password không khớp',
                'password.min'=>'Password có ít nhất 6 ký tự'
            ]);
        $user = new User();
        $user->full_name =$req->fullname;
        $user->email =$req->email;
        $user->password= Hash::make($req->password);
        $user->phone =$req->phone;
        $user->address=$req->address;
        $user->save();
        return redirect()->back()->with('thanhcong','Tạo tài khoản thành công');
    }
    public function postLogin(Request $req){
        $this->validate($req,
            [
                'email'=>'required|email',
                'password'=>'required|min:6|max:20'
            ],
            [
                'email.required'=>'Vui lòng nhập lại email',
                'email.email'=>'Email không đúng định dạng',
                'password.required'=>'Vui lòng nhập lại password',
                'password.min'=>'Password có ít nhất 6 ký tự',
                'password.max'=>'Password quá 20 ký tự'
            ]
        );
        $scredentials = array('email' =>$req->email,
            'password'=> $req->password );
        if(Auth::attempt($scredentials)){
            return redirect()->back()->with(['flag'=>'success','message'=>'Đăng nhập thành công']);
        }
        else
        {
            return redirect()->back()->with(['flag'=>'success','message'=>'Đăng nhập không thành công']);
        }
    }
    public function getLogout(){
        Auth::logout();
        return redirect()->route('index');
    }
    public function getSearch(Request $req){
        $product = Product::where('name','like','%'.$req->key.'%')
            ->orWhere('unit_price',$req->key)
            ->get();
        return view('page.search',compact('product'));

    }
   
}
