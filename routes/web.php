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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/series', 'SeriesController@listarSeries');

Route::get('/series/criar', 'SeriesController@create');
Route::post('/series/criar', 'SeriesController@store');
Route::post('/series/remover/{id}', 'SeriesController@destroy');

Route::get('/categoria', 'CategoriaController@listarCategoria');

Route::get('/categoria/criar', 'CategoriaController@create');


Route::get('/idioma', 'IdiomaController@listarIdioma');

Route::get('/idioma/criar', 'IdiomaController@create');

