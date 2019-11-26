<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!.
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('clientes', 'ClienteController');
Route::resource('administradores', 'AdminController');
Route::resource('estados', 'EstadoController');
Route::resource('eventos', 'EventoController');
Route::resource('boletos', 'BoletoController');
Route::resource('instituciones', 'InstitucionController');
Route::resource('usuarios', 'UsuarioController');
Route::post('boletos/{id_usuario}/{id_evento}', 'BoletoController@buy')->name('boletos.buy');
Route::get('evento', 'EventoController@showCurrent')->name('eventos.current');

