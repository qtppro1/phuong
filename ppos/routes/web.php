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

Route::get('/login','App\Http\Controllers\HomeController@login')->name('login');

Route::get('/optionproduct','App\Http\Controllers\HomeController@optionproduct')->name('optionproduct');

Route::get('/addproduct','App\Http\Controllers\HomeController@addproduct')->name('addproduct');

Route::get('/addcustomer','App\Http\Controllers\HomeController@themkh')->name('themkh');

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


