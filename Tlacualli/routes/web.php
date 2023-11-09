<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/','HomeController@Home');
Route::get('/nosotros','HomeController@Nosotros');
Route::get('/ejemplo','HomeController@Ejemplo');
Route::get('/unete','HomeController@unete');
