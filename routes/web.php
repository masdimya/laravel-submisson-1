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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/form', 'AuthController@form')->name('form');
Route::post('/register', 'AuthController@register')->name('register');


Route::get('/welcome', 'AuthController@welcome')->name('welcome');


