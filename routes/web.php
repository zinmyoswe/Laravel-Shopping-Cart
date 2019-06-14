<?php

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


Route::get('/','PageController@index')->name('page');

Route::get('/shop','ShopController@index')->name('shop.index');
Route::get('/shop/{product}','ShopController@show')->name('shop.show');

Route::get('/cart','CartController@index')->name('cart.index');
Route::post('/cart','CartController@store')->name('cart.store');
Route::delete('/cart/{product}','CartController@destroy')->name('cart.destroy');

Route::post('/cart/{product}','CartController@update')->name('cart.update');

Route::post('/cart/switchsaveforlater/{product}','CartController@switchsaveforlater')->name('cart.switchsaveforlater');

Route::delete('/saveforlater/{product}','SaveforlaterController@destroy')->name('saveforlater.destroy');
Route::post('/saveforlater/switchtocart/{product}','SaveforlaterController@switchtocart')->name('saveforlater.switchtocart');

Route::get('/checkout','CheckoutController@index')->name('checkout');
Route::post('/checkout','CheckoutController@store')->name('checkout.store');

Route::get('/thankyou','ConfirmationController@index')->name('confirmation.index');


Route::get('/payment','CheckoutController@payment')->name('payment');

// ------------Coupon---------------
Route::post('/coupon','CouponsController@store')->name('coupon.store');
Route::delete('/coupon','CouponsController@destroy')->name('coupon.destroy');



Route::get('empty',function(){
	Cart::instance('saveforlater')->destroy();
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function(){
	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/', 'AdminController@index')->name('admin.dashboard');
});
