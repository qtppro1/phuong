<?php

namespace App\Http\Controllers;
use App\Models\loaisp;
use App\Models\nhacungcap;
use App\Models\sanpham;
use App\Models\loaidh;
use Illuminate\Http\Request;
use App\Models\User;
use DB;
use Illuminate\Support\Carbon;
use mysql_xdevapi\Table;
use mysql_xdevapi\TableSelect;
use phpDocumentor\Reflection\Types\Array_;
use phpDocumentor\Reflection\Types\This;
use validate;
use Session;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use function Symfony\Component\HttpFoundation\HeaderUtils;
use \DateTime;
use Carbon\Carbonl;
use Algenza\Cosinesimilarity\Cosine;
use RealRashid\SweetAlert\Facades\Aler;
Use Alert;

class HomeController extends Controller
{

    public function home(){
            return view('customer.home');
    }
//trang chủ
    public function index(){
        if (Auth::check()){
            return view('customer.index');
        }else{
            return view('customer.login');
        }


    }
    //đăng nhập
    public function login(Request $res){
        return view('customer.login');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
    //kiểm tra đăng nhập
    public function checkLogin(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');
        if (Auth::attempt(['email' => $email, 'password' => $password, 'maquyen' => 2])){
            $register_success = Session::get('register_success');
            Session()->put('register_success');
            return redirect()->route('home')->with('register_success','thanh cong');
        }else{
            $register_success = Session::get('no_success');
            Session()->put('no_success');
            return redirect()->back()->with('no_success', 'Email hoặc mật khẩu của bạn không đúng!');
        }
    }

    //dangky
    public function dangky()
    {
        return view('customer.dangky');
    }

    //dang ky
    public function postdk(Request $res){
        $hoten = $res->input('hoten');
        $diachi = $res->input('diachi');
        $gioitinh = $res->input('gioitinh');
        $email = $res->input('email');
        $matkhau = $res->input('matkhau');
        // kiem tra mat khau co trung khong
            $user = new User;
            $user->hoten = $hoten;
            $user->maquyen = 2;
            $user->diachi = $diachi;
            $user->gioitinh=$gioitinh;
            $user->email = $email;
            $user->password = bcrypt($matkhau);
            $user->save();
            Session::put('dk_success');
            return redirect()->route('home')->with('dk_success', 'Đăng ký tài khoản thành công');
    }
    //chọn nhóm sản phẩm
    public function addproduct(Request $request){
        $lsp = DB::table('loaisps')->get();
        $ncc = DB::table('nhacungcaps')->get();
        return view('customer.addproduct')->with([
            'lsp'=>$lsp,
            'ncc'=>$ncc,
        ]);
    }
    //thêm sản phẩm mới
    public function postproduct(Request $res){
        $malsp = $res->input('lsp');
        $mancc = $res->input('ncc');
        $tensp = $res->input('tensp');
        $soluong = $res->input('soluong');
        $hinhanh = $res->input('hinhanh');
        $giavon = $res->input('giavon');
        $giaspbanra = $res->input('giabanra');
        $mieuta = $res->input('mieuta');
        $trangthai = $res->input('trangthai');


        $sp = new sanpham();
        $sp->malsp = $malsp;
        $sp->mancc = $mancc;
        $sp->tensp = $tensp;
        $sp->soluong = $soluong;
        $sp->hinhanh = $hinhanh;
        $sp->giavon = $giavon;
        $sp->giaspbanra = $giaspbanra;
        $sp->mieuta = $mieuta;
        $sp->trangthai = $trangthai;
        $sp->save();
        $addp_success = Session::get('addp_success');
        Session::put('addp_success');
        return redirect()->back()->with('addp_success', 'Thêm sản phẩm thành công');
    }

    //them kh
    public function themkh(){
        return view('customer.themkh');
    }
//them nhà cung cấp sản phẩm
    public function postncc(Request $res){
        $hoten = $res->input('tenncc');
        $diachi = $res->input('diachincc');
        $sdt = $res->input('sdtncc');
        $nganhhang1 = $res->input('nganhhang1');

        // kiem tra mat khau co trung khong
        $ncc  = new nhacungcap();
        $ncc->tenncc = $hoten;
        $ncc->diachincc = $diachi;
        $ncc->sdt = $sdt;
        $ncc->nganhhangcc=$nganhhang1;
        $ncc->save();
        Session::put('ncc_success');
        return redirect()->route('home')->with('ncc_success', 'Thêm nhà cung cấp sản phẩm thành công');
    }

    //them loai san pham
    public function themlsp(){
        return view('customer.themlsp');
    }
    //thêm loại sản phẩm vào csdl
    public function postlsp(Request $res){
        $tenloai = $res->input('tenlsp');
        $mota = $res->input('mota');

        $lsp = new loaisp();
        $lsp->tenlsp=$tenloai;
        $lsp->mota=$mota;
        $lsp->save();
        Session::put('lsp_success');
        return redirect()->route('home')->with('lsp_success', 'Thêm Loại sản phẩn thành công');
    }
    //thêm nhà cung cấp sản phẩm
    public function themncc(){
        $lsp = DB::table('loaisps')->get();
        return view('customer.themncc')->with([
            'lsp'=> $lsp,
        ]);
    }

    //them loai don hang
    public function add_order(){
        return view('customer.themldh');
    }

    public function postadd_order(Request $res){
        $tenloai = $res->input('tenldh');
        $mota = $res->input('mota');

        $lsp = new loaidh();
        $lsp->tenldh=$tenloai;
        $lsp->mota=$mota;
        $lsp->save();
        Session::put('ldh_success');
        return redirect()->route('home')->with('ldh_success', 'Thêm Loại đơn hàng thành công');
    }
    //tao đơn hàng mới
    public function createorder(){
        return view('customer.create_order');
    }

    //đơn hàng
    public function invoice(){
        return view('customer.invoice');
    }
    //dai ly
    public function agency(){
        return view('customer.agency');
    }
    //chi tiết đơn hàng
    public  function invoice_detail(){
        return view('customer.invoice_detail');
    }
    //sản phẩm
    public function product(){
        return view('customer.product');
    }

    public function user(){
        return view('customer.user');
    }
    //trang thai don hang
    public function status_invoice(){
        return view('customer.status_invoice');
    }

    //tuyen duong
    public function route_order(){
        return view('customer.route_order');
    }

    //chi tiết sản phẩm
    public function product_detail(){
        return view('customer.detail_product');
    }
}
