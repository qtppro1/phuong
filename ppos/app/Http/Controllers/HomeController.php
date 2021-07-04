<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  
    public function home(){
        return view('customer.home');
    }

    public function index(){
        return view('customer.index');
    }

    public function login(){
        return view('customer.login');
    }
    public function optionproduct(){
        return view('customer.option_category');
    }
    public function addproduct(){
        $var = $_GET['heard'];
        if ($var == 3){
            $var="Phụ kiện";
        }
        if($var == 2){
            $var="Ipad";

        }if($var == 1){
            $var="Iphone";
        }
        return view('customer.addproduct')->with([
            'var'=>$var,
        ]);

    }
    //them kh
    public function themkh(){
        return view('customer.themkh');
    }
//them nhà cung cấp sản phẩm
    public function themncc(){
        return view('customer.themncc');
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
