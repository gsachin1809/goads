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


Route::get('/profile/chat', function () {
    return view('customer.chat');
});

Route::get('/profile/createads', function () {
    return view('customer.createads');
});

Route::get('/profile/myads', function () {
    return view('customer.myads');
});

Route::get('/profile/wallet', function () {
    return view('customer.wallet');
});


Route::get('/profile/myprofile', function () {
    return view('customer.myprofile');
});


Route::get('/profile/customer', function () {
    return view('customer.index');
});


Route::get('/login', function () {
    return view('login');
});

Route::get('/', function () {
    return view('index');
});
