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
    return view('Home');
});
Route::get('/epayment', function () {
    return view('epayment');
})->name('epayment');

Route::get('/managed', function () {
    return view('managed');
})->name('managed');

Route::get('/bank', function () {
    return view('bank');
})->name('bank');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
