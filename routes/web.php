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


//Rotas de Fornecedores

Route::get('fornecedores/', [

		'uses' => 'FornecedoresController@index',
		'as' => 'fornecedores'
]);

Route::post('fornecedor/store', [

		'uses' => 'FornecedoresController@store',
		'as' => 'fornecedor.store'
]);

Route::get('fornecedor/create', [

		'uses' => 'FornecedoresController@create',
		'as' => 'fornecedor.create'
]);

Route::get('fornecedor/edit/{id}', [

		'uses' => 'FornecedoresController@edit',
		'as' => 'fornecedor.edit'
]);

Route::post('fornecedor/update/{id}', [

		'uses' => 'FornecedoresController@update',
		'as' => 'fornecedor.update'
]);

Route::get('fornecedor/delete/{id}', [

		'uses' => 'FornecedoresController@destroy',
		'as' => 'fornecedor.delete'
]);

Route::get('fornecedor/search/', [

		'uses' => 'FornecedoresController@searchMatch',
		'as' => 'fornecedor.searchMatch'
]);

Route::get('fornecedor/pesquisa/', [

		'uses' => 'FornecedoresController@search',
		'as' => 'fornecedor.pesquisa'
]);

//rotas de obras

Route::get('obras/', [

		'uses' => 'ObrasController@index',
		'as' => 'obras'
]);

Route::post('obras/store', [
		'uses' => 'ObrasController@store',
		'as' => 'obras.store'
]);

Route::get('obras/create', [

		'uses' => 'ObrasController@create',
		'as' => 'obras.create'
]);

Route::get('obras/edit/{id}', [

		'uses' => 'ObrasController@edit',
		'as' => 'obras.edit'
]);

Route::post('obras/update/{id}', [

		'uses' => 'ObrasController@update',
		'as' => 'obras.update'
]);

Route::get('obras/delete/{id}', [

		'uses' => 'ObrasController@destroy',
		'as' => 'obras.delete'
]);

Route::get('obras/search/', [

		'uses' => 'ObrasController@searchMatch',
		'as' => 'obras.searchMatch'
]);

Route::get('obras/pesquisa/', [

		'uses' => 'ObrasController@search',
		'as' => 'obras.pesquisa'
]);