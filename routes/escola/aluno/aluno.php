<?php

Route::group(['prefix' => 'escola/aluno', 'namespace' => 'Escola\Aluno'], function () {

    Route::get('/', ['as' => 'escola.aluno', 'uses' => 'EscolaAlunoController@index']);

    Route::get('show/{id}', ['as' => 'escola.aluno.show', 'uses' => 'EscolaAlunoController@show']);

    Route::get('destroy/{id}', ['as' => 'escola.aluno.destroy', 'uses' => 'EscolaAlunoController@destroy']);

    Route::get('edit/{id}', ['as' => 'escola.aluno.edit', 'uses' => 'EscolaAlunoController@edit']);

    Route::get('create', ['as' => 'escola.aluno.create', 'uses' => 'EscolaAlunoController@create']);

    Route::post('update/{id}', ['as' => 'escola.aluno.update', 'uses' => 'EscolaAlunoController@update']);

    Route::post('filtrar', ['as' => 'escola.aluno.filtrar', 'uses' => 'EscolaAlunoController@filtrar']);

    Route::post('store', ['as' => 'escola.aluno.store', 'uses' => 'EscolaAlunoController@store']);

});