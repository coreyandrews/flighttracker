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


Route::get('/template', function () {
    return view('template');
});

//INLINED ROUTE BELOW
//Route::get('/about', function () {
//
//
// $flight = App\Flights::latest()->get();
//
//    return view('about', [
//        
//    'flights' => $flight
//
//    ]);    
//});

Route::get('/flightlog', function () {
    return view('flightlog', [
        'flights' => App\Flights::latest()->get()
        //'flights' => App\Flights::paginate(4)
    ]);
});

Route::post('/flightlog', 'FlightsController@store');

Route::get('/flightlog/create', 'FlightsController@create');

Route::get('/flightlog/{flight}', 'FlightsController@show'); //wild card should always be at the bottom, order matters. 

Route::get('/flightlog/{flight}/edit', 'FlightsController@edit');

Route::put('/flightlog/{flight}', 'FlightsController@update');

Route::delete('/flightlog/{flight}', 'FlightsController@destroy')->name('flights.destroy');

// GET /flights
// GET /flights/id
// POST /flights
// PUT /flights/id
// DELETE /flights/id

