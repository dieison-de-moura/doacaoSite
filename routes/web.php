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

Route::get('/', ['as' => 'site.home', 'uses' => 'HomeController@index']);

//rotas para cadastro de hospital
//primeiro parametro serve para definir a URL
//segundo parametro seta o que será utilizado
//indice 'as' está setando apelido para chamar a rota
//indice 'uses' está informando para onde será redirecionado
Route::get('/admin/hospital', ['as' => 'admin.hospital', 'uses' => 'Admin\HospitalController@index']); //lista os hospitais
Route::get('/admin/hospital/adicionar', ['as' => 'admin.hospital.adicionar', 'uses' => 'Admin\HospitalController@adicionar']); //adiciona hospitais
Route::post('/admin/hospital/salvar', ['as' => 'admin.hospital.salvar', 'uses' => 'Admin\HospitalController@salvar']); //salvar cadastro
Route::get('/admin/hospital/editar/{id}', ['as' => 'admin.hospital.editar', 'uses' => 'Admin\HospitalController@editar']); //editar hospitais
Route::put('/admin/hospital/atualizar/{id}', ['as' => 'admin.hospital.atualizar', 'uses' => 'Admin\HospitalController@atualizar']); //atualizar hospitais
Route::get('/admin/hospital/deletar/{id}', ['as' => 'admin.hospital.deletar', 'uses' => 'Admin\HospitalController@deletar']); //editar hospitais

//rotas para cadastrar doacao
Route::get('/admin/doacao', ['as' => 'admin.doacao', 'uses' => 'Admin\requerDoacaoController@index']); //lista os hospitais
Route::get('/admin/doacao/adicionar', ['as' => 'admin.doacao.adicionar', 'uses' => 'Admin\requerDoacaoController@adicionar']); //adiciona hospitais
Route::post('/admin/doacao/salvar', ['as' => 'admin.doacao.salvar', 'uses' => 'Admin\requerDoacaoController@salvar']); //salvar cadastro
Route::get('/admin/doacao/editar/{id}', ['as' => 'admin.doacao.editar', 'uses' => 'Admin\requerDoacaoController@editar']); //editar hospitais
Route::put('/admin/doacao/atualizar/{id}', ['as' => 'admin.doacao.atualizar', 'uses' => 'Admin\requerDoacaoController@atualizar']); //atualizar hospitais
Route::get('/admin/doacao/deletar/{id}', ['as' => 'admin.doacao.deletar', 'uses' => 'Admin\requerDoacaoController@deletar']); //editar hospitais



Route::get('/admin/termos', ['as' => 'admin.termos.uso', 'uses' => 'HomeController@termos']);
Route::get('/admin/sobre_empresa', ['as' => 'admin.sobre.empresa', 'uses' => 'HomeController@sobre']);
Route::get('/detalhe-doacao/{id}', ['as' => 'admin.detalhe', 'uses' => 'HomeController@detalhe']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
