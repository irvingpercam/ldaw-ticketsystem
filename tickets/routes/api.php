<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('crear_admin', 'ApiController@createAdmin')->name('admin.create');
Route::post('crear_cliente', 'ApiController@createClient')->name('cliente.create');
Route::post('crear_evento', 'ApiController@createEvent')->name('evento.create');
Route::patch('modificar_evento', 'ApiController@modifyEvent')->name('evento.modify');
Route::delete('eliminar_evento', 'ApiController@deleteEvent')->name('evento.delete');
Route::get('eventos_actuales', 'ApiController@showCurrentEvents')->name('evento.current');
Route::get('eventos', 'ApiController@showAllEvents')->name('evento.all');
Route::post('boletos/{id_usuario}/{id_evento}', 'ApiController@buyTicket')->name('boletos.buy');
Route::patch('asistencia', 'ApiController@registerAssistenat')->name('eventos.assistance');
