<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SipayController;
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
    return view('Home');
})->name('home');
Route::get('/epayment', function () {
    return view('epayment');
})->name('epayment');

Route::get('/managed', function () {
    return view('managed');
})->name('managed');

Route::get('/bank', function () {
    return view('bank');
})->name('bank');

Route::get('/carriere', 'App\Http\Controllers\SipayController@index')->name('carriere');

Route::get('/carriere/{slug}', 'App\Http\Controllers\SipayController@show')->name('carriere.show');

Route::get('/carriere/{slug}/postuler', 'App\Http\Controllers\SipayController@Postuler')->name('carriere.postuler');

Route::post('/send-application', 'App\Http\Controllers\SipayController@send')->name('send.application');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
