<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    $mensagem = "";
    return view('sac', compact('mensagem'));
});

Route::get('/sac', ['as' => 'sac', 'uses' => 'SacController@index']);
Route::post('sac/pesquisar', ['as' => 'sac.pesquisar', 'uses' => 'SacController@pesquisar']);

Route::post('chamado/store', ['as' => 'chamado.store', 'uses' => 'ChamadoController@store']);

Route::get('/relatorio', ['as' => 'relatorio', 'uses' => 'RelatorioController@index']);

Route::post('relatorio/pesquisar', ['as' => 'relatorio.pesquisar', 'uses' => 'ChamadoController@pesquisar']);
