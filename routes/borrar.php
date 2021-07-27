<?php
use Illuminate\Support\Facades\Route;


Route::GET('/articulos', 'ArticuloController@index');
Route::POST('/articulos', 'ArticuloController@store');
Route::PUT('/articulos/{id}', 'ArticuloController@update');
Route::DELETE('/articulos/{id}', 'ArticuloController@destroy');