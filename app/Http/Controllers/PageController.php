<?php

namespace App\Http\Controllers;
use App\Slide;
use App\Product;
use App\ProductType;
use Illuminate\Http\Request;
use App\User;
use Hash;
use Auth;
class PageController extends Controller
{
    public function getIndex(){
    	$slide = Slide::all();
    	//print_r($slide);
    	//exit;
    	//return view('page.trangchu',['slide'=>$slide]);
        $new_product = Product::where('new',1)->paginate(4);
        $sanpham_khuyenmai = Product::where('promotion_price','<>',0)->paginate(8);
    	return view('page.trangchu',compact('slide','new_product','sanpham_khuyenmai'));
    }
    public function getLoaiSp($type){
        $sp_theoloai = Product::where('id_type',$type)->get();
        $sp_khac = Product::where('id_type','<>',$type)->paginate(3);
        $loai = ProductType::all();
        $loai_sps = ProductType::where('id',$type)->first();
    	return view('page.loai_sanpham',compact('sp_theoloai','sp_khac','loai','loai_sps'));
    }
    public function getChitiet(Request $req){
        $sanpham = Product::where('id',$req->id)->first();
        

    	return view('page.chitiet_sanpham',compact('sanpham'));
    }
    public function getLienhe(){
    	return view('page.lienhe');
    }
    public function getGioithieu(){
    	return view('page.gioithieu');
    }
    public function getSearch(Request $req){
        $product = Product::where('name','like','%'.$req->key.'%')
        ->orWhere('unit_price',$req->key)
        ->get();
        return view('page.search',compact('product'));
            
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
                're_password.same'=>'Mật khẩu không khớp',
                'password.min'=>'Mat khau it nhat 6 ky tu'
            ]);
        $user = new User();
        $user->full_name =$req->fullname;
        $user->email =$req->email;
        $user->password= Hash::make($req->password);
        $user->phone =$req->phone;
        $user->address=$req->address;
        $user->save();
        return redirect()->back()->with('thanhcong','Tao tai khoan thanh cong');
    }
    public function postLogin(Request $req){
        $this->validate($req,
            [ 
                'email'=>'required|email',
                'password'=>'required|min:6|max:20'
            ],
            [
                'email.required'=>'vui long nhap email',
                'email.email'=>'email khong dung dinh dang',
                'password.required'=>'vui long nhap password',
                'password.min'=>'password it nhat 6 ky tu',
                'password.max'=>'mat khau qua 20 ky tu'
            ]
            );
        $scredentials = array('email' =>$req->email,
        'password'=> $req->password );
        if(Auth::attempt($scredentials)){
            return redirect()->back()->with(['flag'=>'success','message'=>'dang nhap thanh cong']);
        }
        else
        {
            return redirect()->back()->with(['flag'=>'success','message'=>'dang nhap khong thanh cong']);
        }
    }
    public function getLogout(){
        Auth::logout();
        return redirect()->route('trang-chu');
    }
}
