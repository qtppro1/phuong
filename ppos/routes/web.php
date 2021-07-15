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

Route::get('/addcustomer','App\Http\Controllers\HomeController@themkh')->name('themkh');


Route::post('/postncc','App\Http\Controllers\HomeController@postncc')->name('postncc');
Route::get('/themncc','App\Http\Controllers\HomeController@themncc')->name('themncc');

Route::get('/createorder','App\Http\Controllers\HomeController@createorder')->name('createorder');
//don hang
Route::get('/invoice','App\Http\Controllers\HomeController@invoice')->name('invoice');
//dai ly
Route::get('/agency','App\Http\Controllers\HomeController@agency')->name('agency');
//ch tiet don hang
Route::get('/invoice_detail','App\Http\Controllers\HomeController@invoice_detail')->name('invoice_detail');
//san pham
Route::get('/product','App\Http\Controllers\HomeController@product')->name('product');

Route::get('/user','App\Http\Controllers\HomeController@user')->name('user');

Route::get('/status_invoice','App\Http\Controllers\HomeController@status_invoice')->name('status_invoice');

Route::get('/route_order','App\Http\Controllers\HomeController@route_order')->name('tuyen');

Route::get('/product_detail','App\Http\Controllers\HomeController@product_detail')->name('product_detail');


//them loai hoa don
Route::get('/add_order','App\Http\Controllers\HomeController@add_order')->name('add_order');
Route::post('/postadd_order','App\Http\Controllers\HomeController@postadd_order')->name('postadd_order');

