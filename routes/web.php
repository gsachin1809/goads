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

Route::get('/hello','CustomerController@index');

Route::get('/myprofile','CustomerController@myprofile');
Route::get('/myprofile/update','CustomerController@update');
Route::post('/myprofile/uploadimage','CustomerController@uploadimage');
Route::post('/myprofile/update','CustomerController@store');

Route::get('/createads','CustomerController@createads');
Route::post('/createads/registration','CustomerController@adsregistration');
Route::post('/createads/payumoney','CustomerController@payumoney');
Route::post('/createads/newads','CustomerController@newads');

Route::get('/chat', 'CustomerController@chat')->name('customer/chat');


Route::get('/myads', function () {
    return view('customer.myads');
});

Route::get('/wallet', function () {
    return view('customer.wallet');
});

Route::get('/index', function () {
    return view('customer.index');
});

Route::get('/', function () {
    return view('index');
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

Route::group(['prefix' => 'artisan'], function(){

    Route::get('migrate/{app_key}', 'ArtisanController@migrate');
    Route::get('migrateRefresh/{app_key}', 'ArtisanController@migrateRefresh');
    Route::get('seed/{app_key}', 'ArtisanController@seed');
    Route::get('down/{app_key}', 'ArtisanController@down');
    Route::get('up/{app_key}', 'ArtisanController@up');

});


Auth::routes();

