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

Route::get('/requisicoes/{id}/show', 'App\Http\Controllers\RequisicoesController@show')->name('requisicoes.show');

Route::get('/requisitantes/{id}/show', 'App\Http\Controllers\RequisitantesController@show')->name('requisitantes.show');

Route::get('/materiais/{id}/show', 'App\Http\Controllers\MateriaisController@show')->name('materiais.show');

Route::get('/tipos_requisitantes/{id}/show', 'App\Http\Controllers\Tipos_RequisitantesController@show')->name('tipos_requisitantes.show');

Route::get('/tipos_equipamentos/{id}/show', 'App\Http\Controllers\Tipos_EquipamentosController@show')->name('tipos_equipamentos.show');

Route::get('/requisicoes/create', 'App\Http\Controllers\RequisicoesController@create')->name('requisicoes.create');

Route::post('/requisicoes/store', 'App\Http\Controllers\RequisicoesController@store')->name('requisicoes.store');

Route::get('/requisitantes/create', 'App\Http\Controllers\RequisitantesController@create')->name('requisitantes.create');

Route::post('/requisitantes/store', 'App\Http\Controllers\RequisitantesController@store')->name('requisitantes.store');