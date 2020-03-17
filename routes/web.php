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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'StudenteController@home')->name("home");
Route::get('/dopo-il-corso/', 'StudenteController@index')->name("studente.index");
Route::get('/dopo-il-corso/studenti/{id}', 'StudenteController@show')->name("studente.show");
