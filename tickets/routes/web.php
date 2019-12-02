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

Route::get('/eventos/{event}/asistencia', 'EventoController@asistance')->name('events.asistance');

Route::patch('/eventos/pass/{event}', 'EventoController@takeAsistance')->name('events.takeAsistance');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::resource('instituciones', 'InstitucionController')
->names('institutions')
->parameters(['instituciones' => 'institution']);
