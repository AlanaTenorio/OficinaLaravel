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

Auth::routes();

Route::get('/home','HomeController@index')->name('home');
Route::get('/produto/cadastrar','ProdutoController@cadastrar')->name('cadastrar');
Route::post('/produto/criar','ProdutoController@criar')->name('criar');
Route::get('/produto/exibir/{produto}','ProdutoController@exibir')->name('exibir');
Route::get('/produto/editar/{produto}','ProdutoController@editar')->name('editar');
Route::post('/produto/salvar/{produto}','ProdutoController@salvar')->name('salvar');
Route::get('/produto/remover/{produto}','ProdutoController@remover')->name('remover');
Route::post('/produto/deletar/{produto}','ProdutoController@deletar')->name('deletar');
Route::get('/produto/listar','ProdutoController@listar')->name('listar');
