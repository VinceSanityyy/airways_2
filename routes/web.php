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


Route::get('/', function () {
    return view('layouts.airways');
});

Route::get('/flightSearch', 'FlightsController@searchFlights')->name('flightSearch');

Route::get('/confirmdetails', 'FlightsController@confirmDetails')->name('confirmdetails');

Auth::routes();



Route::get('/home', 'HomeController@index')->name('home');


// Route::get('{path}','HomeController@index')->where( 'path', '([A-z]+)?' );


//dave

Route::get('/payment', function () {
    return view('payment');
});
Route::get('/reciept', function () {
    return view('reciept');
});
Route::get('/termsofuse', function () {
    return view('payment.tems');
});

Route::resource('payment','TempPaymentController');
Route::resource('reciept','TempRecieptControler');

