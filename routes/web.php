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

Route::get('/clubs/create', 'ClubController@create');

Route::post('/clubs', 'ClubController@store');

Route::get('/clubs/{club}', 'ClubController@show' );

Route::get('/clubs', 'ClubController@index' )->name('article.index');

Route::get('/clubs/{club}/edit', 'ClubController@edit');

Route::put('/clubs/{club}/edit', 'ClubController@update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
