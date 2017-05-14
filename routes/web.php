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


Route::get('/customer/chat', function () {
    return view('customer.chat');
});

Route::get('/customer/createads', function () {
    return view('customer.createads');
});

Route::get('/customer/createads/Registeration', function () {
    return view('customer.registration');
});


Route::get('/customer/myads', function () {
    return view('customer.myads');
});

Route::get('/customer/wallet', function () {
    return view('customer.wallet');
});


Route::get('/customer/myprofile', function () {
    return view('customer.myprofile');
});


Route::get('/customer/index', function () {
    return view('customer.index');
});



Route::get('/', function () {
    return view('index');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
