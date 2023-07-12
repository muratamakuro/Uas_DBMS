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

Route::get('bagianres', 'App\Http\Controllers\bagianresController@index');
Route::get('barangres', 'App\Http\Controllers\barangresController@index');
Route::get('pengeluaranres', 'App\Http\Controllers\pengeluaranresController@index');
Route::get('pengeluaranitemres', 'App\Http\Controllers\bpengeluaranitemresController@index');
Route::get('petugasres', 'App\Http\Controllers\petugasresController@index');
