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

Route::get('/requisicoes', 'App\Http\Controllers\RequisicoesController@index')->name('requisicoes.index');

Route::get('/requisitantes', 'App\Http\Controllers\RequisitantesController@index')->name('requisitantes.index');

Route::get('/materiais', 'App\Http\Controllers\MateriaisController@index')->name('materiais.index');

Route::get('/tipos_requisitantes', 'App\Http\Controllers\Tipos_RequisitantesController@index')->name('tipos_requisitantes.index');

Route::get('/tipos_equipamentos', 'App\Http\Controllers\Tipos_EquipamentosController@index')->name('tipos_equipamentos.index');