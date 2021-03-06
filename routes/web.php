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

Route::get('recepciondebodega', '\App\Http\Controllers\RecepcionDeBodegaController@index');
Route::get('/unidadN','\App\Http\Controllers\RecepcionDeBodegaController@getUnidadNegocio');
Route::get('/centroC','\App\Http\Controllers\RecepcionDeBodegaController@getCentroCosto');
Route::get('/recurso','\App\Http\Controllers\RecepcionDeBodegaController@getRecurso');
Route::get('/unidadM','\App\Http\Controllers\RecepcionDeBodegaController@getUnidadMedida');
