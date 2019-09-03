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

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/signin', function () {
    return view('user.signin');
});
Route::get('/loginn', function () {
    return view('login.loginn');
});
Route::get('/signup', function () {
    return view('user.signup');
});


Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/', 'HomeController@index')->name('index');

Route::get('/shop', 'ShopController@index')->name('shop.index');
Route::get('/shop/{product}', 'ShopController@show')->name('shop.show');

Route::get('/cart',function(){
    return view('cart.cart');
});