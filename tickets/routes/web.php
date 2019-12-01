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
Route::resource('eventos', 'EventoController')
->names('events')
->parameters(['eventos' => 'event']);

Route::view('/contacto', 'contact')->name('contact');
Route::post('contact', 'MessageController@store')->name('messages.store');

// Route::get('/eventos', 'EventoController@index')->name('events.index');
// Route::get('/eventos/crear', 'EventoController@create')->name('events.create');
// Route::get('/eventos/{event}/editar', 'EventoController@edit')->name('events.edit');
// Route::patch('/eventos/{event}', 'EventoController@update')->name('events.update');
// Route::post('/eventos', 'EventoController@store')->name('events.store');
// Route::get('/eventos/{event}', 'EventoController@show')->name('events.show');
// Route::delete('/eventos/{event}', 'EventoController@destroy')->name('events.destroy');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
