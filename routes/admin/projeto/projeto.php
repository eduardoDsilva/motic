<?php

Route::group(['prefix' => 'admin/projeto',  'namespace' => 'Admin\Projeto'], function(){

    Route::get('/',['as' => 'admin.projeto', 'uses' => 'AdminProjetoController@index']);

    Route::get('show/{id}',['as' => 'admin.projeto.show', 'uses' => 'AdminProjetoController@show']);

    Route::get('destroy/{id}',['as' => 'admin.projeto.destroy', 'uses' => 'AdminProjetoController@destroy']);

    Route::get('edit/{id}',['as' => 'admin.projeto.edit', 'uses' => 'AdminProjetoController@edit']);

    Route::get('create',['as' => 'admin.projeto.create', 'uses' => 'AdminProjetoController@create']);

    Route::get('rebaixa/{id}',['as' => 'admin.projeto.rebaixa', 'uses' => 'AdminProjetoController@rebaixaSuplente']);

    Route::post('update/{id}',['as' => 'admin.projeto.update', 'uses' => 'AdminProjetoController@update']);

    Route::post('filtrar',['as' => 'admin.projeto.filtrar', 'uses' => 'AdminProjetoController@filtrar']);

    Route::post('store',['as' => 'admin.projeto.store', 'uses' => 'AdminProjetoController@store']);

    Route::get('relatorios',['as' => 'admin.projeto.relatorios', 'uses' => 'AdminProjetoRelatorioController@index']);


});
    Route::get('/json-categorias-projeto', 'Admin\Projeto\AdminProjetoController@categorias');

    Route::get('/json-alunos', 'Admin\Projeto\AdminProjetoController@alunos');

    Route::get('/json-professores', 'Admin\Projeto\AdminProjetoController@professores');

