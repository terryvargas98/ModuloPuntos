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

Route::prefix('puntos')->group(function() {
    Route::get('/', 'PuntosController@index');
    Route::get('/puntosClientes','PuntosController@CalcularPuntos');
});
