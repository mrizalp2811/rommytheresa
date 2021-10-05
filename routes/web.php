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

Route::get('/photos', function () {
    return view('photos');
});

Route::view('/rsvp', 'rsvp');
Route::post('/rsvp', 'App\Http\Controllers\BulkSmsController@sendSms');