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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('index', function () {
//     return view('inicio');
// });

Route::get('/', 'PrincipalController@inicio');
Route::get('eventos', 'PrincipalController@events');
Route::get('evento/{id}','PrincipalController@event');

// Route::resource('eventos', 'EventoController');

// Route::resource('campeonatos', 'CampeonatoController');

Route::resources([
    'editEventos' => 'EventoController',
    'editCampeonatos' => 'CampeonatoController'
]);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

