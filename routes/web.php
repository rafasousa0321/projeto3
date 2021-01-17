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

//REQUISIÇÕES

Route::get('/requisicoes', 'App\Http\Controllers\RequisicoesController@index')->name('requisicoes.index');

Route::get('/requisicoes/{id}/show', 'App\Http\Controllers\RequisicoesController@show')->name('requisicoes.show');

Route::get('/requisicoes/create', 'App\Http\Controllers\RequisicoesController@create')->name('requisicoes.create');

Route::post('/requisicoes/store', 'App\Http\Controllers\RequisicoesController@store')->name('requisicoes.store');

Route::get('/requisicoes/{id}/edit', 'App\Http\Controllers\RequisicoesController@edit')->name('requisicoes.edit');

Route::patch('/requisicoes/{id}/update', 'App\Http\Controllers\RequisicoesController@update')->name('requisicoes.update');

Route::get('/requisicoes/{id}/delete', 'App\Http\Controllers\RequisicoesController@delete')->name('requisicoes.delete');

Route::delete('/requisicoes/destroy', 'App\Http\Controllers\RequisicoesController@destroy')->name('requisicoes.destroy');

//REQUISITANTES

Route::get('/requisitantes', 'App\Http\Controllers\RequisitantesController@index')->name('requisitantes.index');

Route::get('/requisitantes/{id}/show', 'App\Http\Controllers\RequisitantesController@show')->name('requisitantes.show');

Route::get('/requisitantes/create', 'App\Http\Controllers\RequisitantesController@create')->name('requisitantes.create');

Route::post('/requisitantes/store', 'App\Http\Controllers\RequisitantesController@store')->name('requisitantes.store');

Route::get('/requisitantes/{id}/edit', 'App\Http\Controllers\RequisitantesController@edit')->name('requisitantes.edit');

Route::patch('/requisitantes/{id}/update', 'App\Http\Controllers\RequisitantesController@update')->name('requisitantes.update');

Route::get('/requisitantes/{id}/delete', 'App\Http\Controllers\RequisitantesController@delete')->name('requisitantes.delete');

Route::delete('/requisitantes/destroy', 'App\Http\Controllers\RequisitantesController@destroy')->name('requisitantes.destroy');

//MATERIAIS

Route::get('/materiais', 'App\Http\Controllers\MateriaisController@index')->name('materiais.index');

Route::get('/materiais/{id}/show', 'App\Http\Controllers\MateriaisController@show')->name('materiais.show');

Route::get('/materiais/create', 'App\Http\Controllers\MateriaisController@create')->name('materiais.create');

Route::post('/materiais/store', 'App\Http\Controllers\MateriaisController@store')->name('materiais.store');

Route::get('/materiais/{id}/edit', 'App\Http\Controllers\MateriaisController@edit')->name('materiais.edit');

Route::patch('/materiais/{id}/update', 'App\Http\Controllers\MateriaisController@update')->name('materiais.update');

Route::get('/materiais/{id}/delete', 'App\Http\Controllers\MateriaisController@delete')->name('materiais.delete');

Route::delete('/materiais/destroy', 'App\Http\Controllers\MateriaisController@destroy')->name('materiais.destroy');

//TIPOS_REQUISITANTES

Route::get('/tipos_requisitantes', 'App\Http\Controllers\Tipos_RequisitantesController@index')->name('tipos_requisitantes.index');

Route::get('/tipos_requisitantes/{id}/show', 'App\Http\Controllers\Tipos_RequisitantesController@show')->name('tipos_requisitantes.show');

Route::get('/tipos_requisitantes/create', 'App\Http\Controllers\Tipos_RequisitantesController@create')->name('tipos_requisitantes.create');

Route::post('/tipos_requisitantes/store', 'App\Http\Controllers\Tipos_RequisitantesController@store')->name('tipos_requisitantes.store');

Route::get('/tipos_requisitantes/{id}/edit', 'App\Http\Controllers\Tipos_RequisitantesController@edit')->name('tipos_requisitantes.edit');

Route::patch('/tipos_requisitantes/{id}/update', 'App\Http\Controllers\Tipos_RequisitantesController@update')->name('tipos_requisitantes.update');

Route::get('/tipos_requisitantes/{id}/delete', 'App\Http\Controllers\Tipos_RequisitantesController@delete')->name('tipos_requisitantes.delete');

Route::delete('/tipos_requisitantes/{id}/destroy', 'App\Http\Controllers\Tipos_RequisitantesController@destroy')->name('tipos_requisitantes.destroy');

//TIPOS_EQUIPAMENTOS

Route::get('/tipos_equipamentos', 'App\Http\Controllers\Tipos_EquipamentosController@index')->name('tipos_equipamentos.index');

Route::get('/tipos_equipamentos/{id}/show', 'App\Http\Controllers\Tipos_EquipamentosController@show')->name('tipos_equipamentos.show');

Route::get('/tipos_equipamentos/create', 'App\Http\Controllers\Tipos_EquipamentosController@create')->name('tipos_equipamentos.create');

Route::post('/tipos_equipamentos/store', 'App\Http\Controllers\Tipos_EquipamentosController@store')->name('tipos_equipamentos.store');

Route::get('/tipos_equipamentos/{id}/edit', 'App\Http\Controllers\Tipos_EquipamentosController@edit')->name('tipos_equipamentos.edit');

Route::patch('/tipos_equipamentos/{id}/update', 'App\Http\Controllers\Tipos_EquipamentosController@update')->name('tipos_equipamentos.update');

Route::get('/tipos_equipamentos/{id}/delete', 'App\Http\Controllers\Tipos_EquipamentosController@delete')->name('tipos_equipamentos.delete');

Route::delete('/tipos_equipamentos/{id}/destroy', 'App\Http\Controllers\tipos_equipamentosController@destroy')->name('tipos_equipamentos.destroy');

