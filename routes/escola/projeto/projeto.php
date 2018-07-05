<?php

Route::group(['prefix' => 'escola/projeto',  'namespace' => 'Escola\Projeto'], function(){

    Route::get('/',['as' => 'escola.projeto', 'uses' => 'EscolaProjetoController@index']);

    Route::get('show/{id}',['as' => 'escola.projeto.show', 'uses' => 'EscolaProjetoController@show']);

    Route::get('destroy/{id}',['as' => 'escola.projeto.destroy', 'uses' => 'EscolaProjetoController@destroy']);

    Route::get('edit/{id}',['as' => 'escola.projeto.edit', 'uses' => 'EscolaProjetoController@edit']);

    Route::get('create',['as' => 'escola.projeto.create', 'uses' => 'EscolaProjetoController@create']);

    Route::post('update/{id}',['as' => 'escola.projeto.update', 'uses' => 'EscolaProjetoController@update']);

    Route::post('filtrar',['as' => 'escola.projeto.filtrar', 'uses' => 'EscolaProjetoController@filtrar']);

    Route::post('store',['as' => 'escola.projeto.store', 'uses' => 'EscolaProjetoController@store']);

});

Route::get('/json-aluno','Escola\Projeto\EscolaProjetoController@alunos');
