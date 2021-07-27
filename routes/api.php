<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::get('/articulos', 'App\Http\Controllers\ArticuloController@index'); //mostrar todos los registros
Route::post('/articulos', 'App\Http\Controllers\ArticuloController@store'); //crear un registro
Route::put('/articulos/{id}', 'App\Http\Controllers\ArticuloController@update'); //actualizar un registro
Route::delete('/articulos/{id}', 'App\Http\Controllers\ArticuloController@destroy'); //actualizar un registro