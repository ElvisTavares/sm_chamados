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

Route::get('/chamados', 'TesteController@index');
Route::get('/criar_chamado','ChamadosController@create');
Route::post('/criar_chamado','ChamadosController@store');
Route::get('/list_chamados','ChamadosController@index');
