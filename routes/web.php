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
Route::get('/cargar','PersonasController@index')->name('personas.index');

Route::post('/cargar/store','PersonasController@importExcel')->name('personas.cargar');


Route::get('/personas','PersonasController@list')->name('personas.list');
