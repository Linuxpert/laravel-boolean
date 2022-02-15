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

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::post('/login', 'Auth\LoginController@login') -> name('login');
Route::post('/register', 'Auth\RegisterController@register') -> name('register');
Route::get('/logout', 'Auth\LoginController@logout') -> name('logout');

//-------------------------------------------------------------------------------


Route::get('/', 'GuestController@home') -> name('home');

Route::get('/postcars/create', 'GuestController@createPostcard') -> name('postcard.create');
Route::post('/postcars/store', 'GuestController@storePostcard') -> name('postcard.store');

//-------------------------------------------------------------------------------------------

Route::get('/api/postcards/list', 'ApiCOntroller@getpostcards') -> name('api.postcards.list');