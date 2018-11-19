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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/estilos/create', 'estiloController@create');
Route::get('/estilos', 'estiloController@index');
Route::post('/estilos', 'estiloController@store');

Route::get('/musicas/create', 'musicaController@create');
Route::get('/musicas', 'musicaController@index');
Route::get('/musicaestilo/{id}', 'estilomusicaController@create');
Route::post('/musicaestilo/{id}', 'estilomusicaController@store');
Route::post('/musicas', 'musicaController@store');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
