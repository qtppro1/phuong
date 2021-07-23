<?php

namespace App\Http\Controllers;
use App\Models\chitietdh;
use App\Models\donhang;
use App\Models\loaikhachhang;
use App\Models\loaisp;
use App\Models\Giohang;
use App\Models\nhacungcap;
use App\Models\sanpham;
use App\Models\loaidh;
use App\Models\tuyen;
use http\Env\Response;
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

    public function logout(Request $request){
        Auth::logout();
        $request->session()->forget('cart');
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
        $quyen=DB::table('quyens')->get();
        $thanhpho= DB::table('tbl_tp')->get();
        return view('customer.dangky')->with([
            'thanhpho'=>$thanhpho,
            'quyen'=>$quyen
        ]);
    }

    //dang ky
    public function postdk(Request $res){
        $hoten = $res->input('hoten');

        $diachicuthe = $res->input('diachicuthe');
        $gioitinh = $res->input('gioitinh');
        $email = $res->input('email');
        $sdt = $res->input('sdt');
        $matkhau = $res->input('matkhau');
        $image = $res->input('image');
        $quyen= $res->input('quyenuser');

        // kiem tra mat khau co trung khong
            $user = new User;
            $user->hoten = $hoten;
            $user->maquyen = $quyen;

            $user->diachicuthe = $diachicuthe;
            $user->gioitinh=$gioitinh;
            $user->email = $email;
            $user->sdt = $sdt;
            $user->password = bcrypt($matkhau);
            $user->image=$image;
            $user->save();
            Session::put('dk_success');
            return redirect()->route('login')->with('dk_success', 'Đăng ký tài khoản thành công');
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
    public function themlkh(){
        return view('customer.themlkh');
    }
    //them lkh
    public function postlkh(Request $res){
        $lkh = $res->input('tenlkh');
        $loaikh = new loaikhachhang();
        $loaikh->tenloaikh=$lkh;
        $loaikh->save();
        Session::put('loaikh_success');
        return redirect()->back()->with('loaikh_success', 'Thêm loại khách hàng thành công');
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
    //tao đơn hàng mới
    public function cart(Request $request)
    {

        $quyenuser=DB::table('quyens')->get();
        $kh=DB::table('users')->get();
        $ldh=DB::table('loaidhs')->get();
        $sp = DB::table('sanphams')->get();
        $lsp = DB::table('loaisps')->get();

        return view('customer.cart')->with([
            'sp'=>$sp,
            'lsp'=>$lsp,
            'loaidhs'=>$ldh,
            'kh'=>$kh,
            'quyenuser'=>$quyenuser
        ]);
    }


//gio hang
    public function addCard($id, Request $request){

        $product = sanpham::find($id);
        $oldCart = Session('cart')?Session::get('cart'):null; // neu co session cart thi lay cart, khoong thi null

        $cart = new Giohang($oldCart);
        $cart->add($product, $id);

        $request->session()->put('cart', $cart);
        //$add_cart_success = Session::get('add_cart_success');
        //Session::put('add_cart_success');
        return redirect()->back()->with(
            'add_cart_success',
            'Đã thêm vào giỏ hàng'
        );
    }

    public function updateCart(Request $request){
        if($request->id and $request->quantity){
            $oldCart = Session::has('cart')?Session::get('cart'):null;
            $cart = new Giohang($oldCart);
            $cart->update_cart($request->id,$request->quantity);
            session()->put('cart', $cart);
        }

    }

    public function getDeleteCart($id){
        $oldCart = Session::has('cart')?Session::get('cart'):null;
        $cart = new Giohang($oldCart);
        $cart->removeItem($id);
        if(count($cart->items) > 0){
            Session::put('cart', $cart);
        }else{
            Session::forget('cart');

        }
        $delete_cart = Session::get('delete_cart');
        Session::put('delete_cart');

        return redirect()->back()->with('delete_cart', 'Đã xóa sản phẩm ra khỏi giỏ hàng');
    }

    //thanhtoan
    public function postthanhtoan(Request $request){
        if($request->idkh and $request->ldh){
            $oldCart = Session::has('cart')?Session::get('cart'):null;
            $cart = new Giohang($oldCart);
            $cart->update_kh($request->idkh,$request->ldh);
            session()->put('cart', $cart);
        }
    }
    public function route_post(Request $request){
        if($request->id_route){
            $oldCart = Session::has('cart')?Session::get('cart'):null;
            $cart = new Giohang($oldCart);
            $cart->update_route($request->id_route);
            session()->put('cart', $cart);
        }
    }


    public function thanhtoan(Request $request){

        $mytime = Carbon::now();
        $quyens=DB::table('quyens')->get();
        $tuyens=DB::table('tuyens')->get();
        $kh=DB::table('users')->get();
        $lhd=DB::table('loaidhs')->get();
        return view('customer.thanhtoan')->with([
            'timenow_order'=>$mytime,
            'quyens'=>$quyens,
            'kh'=>$kh,
            'lhd'=>$lhd,
            'tuyens'=>$tuyens,
        ]);
    }
    public function datHang(Request $request){

        $cart = Session::get('cart');
        $route= DB::table('tuyens')->where('id',$cart->route_cart)->get();

        if(count($cart->items)==0){
            Session::put('order_Nsuccess');
            return redirect()->back()->with('order_Nsuccess','Giỏ hàng rỗng!');
        }else {
            $order = new donhang();
            $order->maldh = $cart->ma_ldh;
            $order->mauser = Auth::user()->id;
            $order->makh = $cart->customer_cart;
            $order->matuyen = $cart->route_cart;
            $order->ngaytao = Carbon::now();
            foreach ($route as $routes)

            $order->tongtien = ($routes->phiship + $cart->totalPrice);
            $order->giamgia = 0;
            $order->phiship = $routes->phiship;

            if ($request->input('thanhtoan') == 1){
                $order->hinhthucthanhtoan = "Tiền mặt";
                $order->stt = "Đã Thanh toán";
            }
            elseif ($request->input('thanhtoan') == 2){
                $order->hinhthucthanhtoan = "Chuyển khoản";
                $order->stt = "Đã Thanh toán";
            }
            elseif ($request->input('thanhtoan') == 3){
                $order->hinhthucthanhtoan = "Thanh toán sau";
                $order->stt = "Chưa Thanh toán";
            }
            $order->save();

            foreach ($cart->items as $key => $value) {
                $orderDetail = new chitietdh();
                $orderDetail->madh = $order->id;
                $orderDetail->masp = $key;
                $orderDetail->soluong = $value['qty'];
                $orderDetail->dongia = ($value['price'] / $value['qty']);
                $orderDetail->thanhtien = $cart->totalPrice;
                $orderDetail->save();
            }
            Session::forget('cart');
            $order_success = Session::get('order_success');
            Session::put('order_success');
            return redirect()->home()->with('order_success', 'Đặt hàng thành công');
        }
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


    //đơn hàng
    public function invoice(){
        $donhang = DB::table('donhangs')->latest()->get();
        $tuyen=DB::table('tuyens')->get();
        $khachhang=DB::table('users')->get();
        return view('customer.invoice')->with([
            'donhang'=>$donhang,
            'tuyen'=>$tuyen,
            'khachhang'=>$khachhang
        ]);
    }
    //dai ly
    public function agency(){
        $agency = DB::table('nhacungcaps')->get();
        return view('customer.agency')->with([
            'agency'=>$agency
        ]);
    }
    //chi tiết đơn hàng
    public  function invoice_detail($idx){

//        $donhang=DB::table('donhangs')->where('id',$idx)->get();
        $donhang=donhang::find($idx);
        echo $donhang;
        $donhang_detail=DB::table('chitietdhs')->where('madh',$donhang->id)->get();
        $product=DB::table('sanphams')->get();
        $user = DB::table('users')->get();
        $quyens = DB::table('quyens')->get();
        $tuyens = DB::table('tuyens')->get();
        $lhd = DB::table('loaidhs')->get();
        return view('customer.invoice_detail')->with([
            'donhang'=>$donhang,
            'donhang_detail'=>$donhang_detail,
            'product'=>$product,
            'user'=>$user,
            'quyens'=>$quyens,
            'tuyens'=>$tuyens,
            'lhd'=>$lhd
        ]);
    }
    //sản phẩm
    public function product(){
        $sp = DB::table('sanphams')->get();
        $lsp = DB::table('loaisps')->select('id')->get();
        return view('customer.product')->with([
            'sp'=>$sp,
            'lsp'=>$lsp
        ]);
    }

    public function user(){
        $user = DB::table('users')->get();
        $quyen = DB::table('quyens')->get();
        return view('customer.user')->with([
            'user'=>$user,
            'quyen'=>$quyen
        ]);
    }
    //trang thai don hang
    public function status_invoice(){
        $donhang=DB::table('donhangs')->latest()->get();
        return view('customer.status_invoice')->with([
            'donhang'=>$donhang
        ]);
    }

    //tuyen duong
    public function tuyen(){
        $tuyen= DB::table('tuyens')->get();
        return view('customer.tuyen')->with([
            'tuyen'=>$tuyen,
        ]);
    }

    //post tuyen duong
    public function route_order(Request $res){
        $thanhpho= DB::table('tbl_tp')->get();
        return view('customer.route_order')->with([
            'thanhpho'=>$thanhpho
        ]);
    }
    public function post_route(Request $res){
        $diemdau = $res->input('diemdau');
        $diemcuoi = $res->input('diemcuoi');
        $km = $res->input('km');
        $phiship = $res->input('ship');

        $tuyen = new tuyen();
        $tuyen ->diemdau=$diemdau;
        $tuyen ->diemcuoi=$diemcuoi;
        $tuyen ->km=$km;
        $tuyen ->phiship=$phiship;
        $tuyen->save();
        Session::put('route_success');
        return redirect()->back()->with('route_success', 'Thêm Loại đơn hàng thành công');
    }

    //chi tiết sản phẩm
    public function product_detail(){
        return view('customer.detail_product');
    }
}
