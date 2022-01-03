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

Route::get('header', 'App\Http\Controllers\MainController@Acceuil')->name('Acceuil1');

Route::get('Acceuil', 'App\Http\Controllers\AdminController@createQuizAction')->name('Acceuil_user');


//................l'inscription et la connexion sont reccupérés du Model User controlé par UserController........................
//pour l'inscription'
Route::get('signup', 'App\Http\Controllers\UserController@signupAction')->name('signup');

//validation de l'inscription
Route::post('signup/create_user', 'App\Http\Controllers\UserController@create_user')->name('create_user');




//pour le connexion
Route::get('signin', 'App\Http\Controllers\UserController@signinAction')->name('signin');


// pour recuperer le detail des quiz 
Route::get('detailquiz/{id}', 'App\Http\Controllers\AdminController@detailQuiz')->name('quiz_detail');

