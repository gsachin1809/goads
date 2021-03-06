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

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/','HomepagesController@index');
Route::get('user/activation/{token}', 'Auth\AuthController@activateUser')->name('user.activate');

Route::get('/index','CustomerController@index');

Route::get('/myprofile','CustomerController@myprofile');
Route::get('/myprofile/update','CustomerController@update');
Route::post('/myprofile/uploadimage','CustomerController@uploadimage');
Route::post('/myprofile/update','CustomerController@store');

Route::get('/createads','CustomerController@createads');
Route::post('/createads/registration','CustomerController@adsregistration');
Route::post('/createads/newads','CustomerController@newads');
Route::post('/createads/payment','CustomerController@payment');
Route::post('/createads/make_payment','CustomerController@make_payment');
Route::post('/createads/package','CustomerController@package');
Route::post('/createads/package-payment','CustomerController@package_payment');

Route::get('/chat','CustomerController@chat')->name('customer/chat');
Route::get('/ads/view/{id}','CustomerController@showads');


Route::get('/myads','CustomerController@myads');

Route::get('/wallet', function () {
    return view('customer.wallet');
});


Route::get('/traffic', function () {
    return view('traffic');
});
Route::get('/contact-us', function () {
    return view('contactus');
});
Route::get('/faq', function () {
    return view('faq');
});
Route::get('/aboutus', function () {
    return view('aboutus');
});
Route::get('/privacy', function () {
    return view('privacy');
});

Route::group(['prefix' => 'artisan'], function(){

    Route::get('migrate/{app_key}', 'ArtisanController@migrate');
    Route::get('migrateRefresh/{app_key}', 'ArtisanController@migrateRefresh');
    Route::get('seed/{app_key}', 'ArtisanController@seed');
    Route::get('down/{app_key}', 'ArtisanController@down');
    Route::get('up/{app_key}', 'ArtisanController@up');

});



Route::get('/test','TestController@index');
Auth::routes();

