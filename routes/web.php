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

// include('api.php');
Route::get('/index','HomeController@index')->name('index');

Route::get('/chitiet/{id}','HomeController@chitiet')->name('chitiet');

Route::get('/timkiem','HomeController@timkiem')->name('timkiem');

Route::get('/dangnhap','HomeController@dangnhap')->name('dangnhap');
Route::get('/pdangnhap','HomeController@postdangnhap')->name('pdangnhap');

Route::get('/dangki','HomeController@dangki')->name('dangki');
Route::post('/dangki','HomeController@postdangki')->name('dangki');

Route::get('/dangxuat','HomeController@dangxuat')->name('dangxuat');

Route::get('/doimatkhau','HomeController@doimatkhau')->name('doimatkhau');
Route::post('/doimatkhau','HomeController@postdoimatkhau')->name('doimatkhau');

Route::get('/admin','AdminController@home')->name('admin')->middleware('checklogin::class');

// Route::get('/quenmk','HomeController@quenmk')->name('quenmk');
// Route::post('/quenmk','HomeController@Sencoderesetpassword')->name('quenmk');

// Route::get('/forget-password', 'ForgotPasswordController@getEmail');
// Route::post('/forget-password', 'ForgotPasswordController@postEmail');

Route::resource('sanpham','ControllerSanpham');
Route::resource('order','ControllerOrder');
Route::get('cart/{id?}', ['as' => 'cart', 'uses' => 'HomeController@cart']);
Route::get('cart_detail/{id?}', ['as' => 'cart_detail', 'uses' => 'HomeController@cart_detail']);
Route::get('ship','HomeController@ship')->name('ship');
Route::get('add-to-cart/{id}',[
	'as'=>'themgiohang',
	'uses'=>'HomeController@getAddtoCart'
]);
Route::get('add-to-cart2/{id}',[
	'as'=>'themgiohang2',
	'uses'=>'HomeController@getAddtoCart2'
]);
Route::get('add-to/{id}',[
	'as'=>'themship',
	'uses'=>'HomeController@getAdd'
]);
Route::get('delete-to-cart/{id}',[
	'as'=>'xoagiohang',
	'uses'=>'HomeController@getDeletetoCart'
]);
Route::get('delete-all-to-cart/{id}',[
	'as'=>'xoahetgiohang',
	'uses'=>'HomeController@getDeletealltoCart'
]);