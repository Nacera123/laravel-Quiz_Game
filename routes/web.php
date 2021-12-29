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
//     return view('home');
// });



route::get('/', 'App\Http\Controllers\MainController@home')->name('home1');
Route::get('Acceuil', 'App\Http\Controllers\MainController@home')->name('Acceuil');
Route::get('Acceuil', 'App\Http\Controllers\AdminController@createQuizAction')->name('Acceuil_user');
