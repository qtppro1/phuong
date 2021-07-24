<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('home','App\Http\Controllers\HomeController@index')->name('home');

Route::get('/login', 'App\Http\Controllers\HomeController@login')->name('login');
Route::get('/logout', 'App\Http\Controllers\HomeController@logout')->name('logout');
Route::post('/check_login', 'App\Http\Controllers\HomeController@checkLogin')->name('checklogin');

Route::get('/dangky', 'App\Http\Controllers\HomeController@dangky')->name('dangky');
Route::post('/post_dk', 'App\Http\Controllers\HomeController@postdk')->name('post_dk');

Route::get('/addproduct','App\Http\Controllers\HomeController@addproduct')->name('addproduct');
Route::post('/postproduct','App\Http\Controllers\HomeController@postproduct')->name('postproduct');


Route::get('/addcategory','App\Http\Controllers\HomeController@themlsp')->name('themlsp');
Route::post('/postlsp', 'App\Http\Controllers\HomeController@postlsp')->name('postlsp');

Route::get('/themlkh','App\Http\Controllers\HomeController@themlkh')->name('themlkh');
Route::post('/postlkh','App\Http\Controllers\HomeController@postlkh')->name('postlkh');


Route::post('/postncc','App\Http\Controllers\HomeController@postncc')->name('postncc');
Route::get('/themncc','App\Http\Controllers\HomeController@themncc')->name('themncc');

Route::get('/cart','App\Http\Controllers\HomeController@cart')->name('cart');
//giỏ hàng
Route::get('add-card/{id}', 'App\Http\Controllers\HomeController@addCard')->name('addCard');
Route::get('update-cart', 'App\Http\Controllers\HomeController@updateCart')->name('getUpdateCart');
Route::get('delete-cart/{id}', 'App\Http\Controllers\HomeController@getDeleteCart')->name('getDeleteCart');
//thanhtoan
Route::get('/thanhtoan', 'App\Http\Controllers\HomeController@thanhtoan')->name('thanhtoan');
Route::get('/postthanhtoan', 'App\Http\Controllers\HomeController@postthanhtoan')->name('postthanhtoan');
Route::get('/route_post', 'App\Http\Controllers\HomeController@route_post')->name('route_post');
Route::post('/dat-hang', 'App\Http\Controllers\HomeController@datHang')->name('datHang');

//tong hop don hang
Route::get('/invoice','App\Http\Controllers\HomeController@invoice')->name('invoice');
//dai ly
Route::get('/agency','App\Http\Controllers\HomeController@agency')->name('agency');
//ch tiet don hang
Route::get('/invoice_detail/{dh}','App\Http\Controllers\HomeController@invoice_detail')->name('invoice_detail');
//san pham
Route::get('/product','App\Http\Controllers\HomeController@product')->name('product');

Route::get('/user','App\Http\Controllers\HomeController@user')->name('user');



//tuyen duong
Route::get('/tuyen','App\Http\Controllers\HomeController@tuyen')->name('tuyen');
Route::get('/route_order','App\Http\Controllers\HomeController@route_order')->name('route_order');
Route::post('/post_route','App\Http\Controllers\HomeController@post_route')->name('post_route');

//cap nhat trang thai don hang
Route::get('/status_invoice','App\Http\Controllers\HomeController@status_invoice')->name('status_invoice');
Route::post('/post_stt/{iddh}','App\Http\Controllers\HomeController@post_stt')->name('post_stt');

Route::get('/product_detail','App\Http\Controllers\HomeController@product_detail')->name('product_detail');


//them loai hoa don
Route::get('/add_order','App\Http\Controllers\HomeController@add_order')->name('add_order');
Route::post('/postadd_order','App\Http\Controllers\HomeController@postadd_order')->name('postadd_order');

