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

Auth::routes();

Route::get('/', function () {
    return view('layouts.airways');
});

Route::get('/flightSearch', 'FlightsController@searchFlights')->name('flightSearch');

Route::get('/confirmdetails/{flight_id}', 'FlightsController@confirmDetails')->name('confirmdetails');




Route::get('/home', 'HomeController@index')->name('home');




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
Route::get('/test', function () {
    return view('airways.test');
});
Route::resource('test','TestConttroller');
Route::resource('payment','TempPaymentController');
Route::resource('reciept','TempRecieptControler');




//bejay
Route::get('/hotelreservation1', 'HotelReservation1Controller@index');
Route::get('/hoteldetails', 'hoteldetailsController@index');
Route::get('/hotelreservation1', 'HotelReservation1Controller@read');
Route::get('/hoteldetails', 'RoomController@read');
Route::get('/hotelbooking','HotelBookingController@index');



Route::get('/hoteldetails/{id}', 'RoomController@readDetails');






//reservatiion
Route::get('reservation', 'ReservationController@showReservation');

// planes
Route::resource('planes', 'PlaneController');

// flights
Route::get('flights', 'FlightsController@getFlights');
Route::post('flights', 'FlightsController@addFlight');

Route::get('{path}','HomeController@index')->where( 'path', '([A-z]+)?' );



