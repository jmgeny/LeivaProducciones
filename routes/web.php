<?php

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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/evento/{id}', 'PrincipalController@evento');
Route::get('/allEventos', 'PrincipalController@allEventos');

Route::get('/resultado/{id}', 'PrincipalController@resultado');
Route::get('/allResultados', 'PrincipalController@allResultados');

Route::resource('event','EventController');
Route::resource('championship','ChampionshipController');