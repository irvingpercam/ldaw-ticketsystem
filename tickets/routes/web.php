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

Route::view('/', 'home')->name('home');
Route::view('/quienes-somos', 'about')->name('about');
Route::get('/eventos', 'EventoController@index')->name('events.index');
Route::get('/eventos/crear', 'EventoController@create')->name('events.create');
Route::post('/eventos', 'EventoController@store')->name('events.store');
Route::get('/eventos/{event}', 'EventoController@show')->name('events.show');
Route::view('/contacto', 'contact')->name('contact');
Route::post('contact', 'MessageController@store')->name('messages.store');