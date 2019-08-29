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

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/', ['as' => 'site.home', 'uses' => 'HomeController@index']);

//rotas para cadastro de hospital
Route::get('/cadastro', ['as' => 'site.cadastrohospital', 'uses' => 'CadastroHospitalController@index']);
Route::post('/cadastro/cadastroHospital', ['as' => 'site.cadastrohospital.salvar', 'uses' => 'CadastroHospitalController@cadastrar']);
