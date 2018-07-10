<?php

Route::group(['prefix' => 'escola/professor', 'namespace' => 'Escola\Professor'], function () {

    Route::get('/', ['as' => 'escola.professor', 'uses' => 'EscolaProfessorController@index']);

    Route::get('show/{id}', ['as' => 'escola.professor.show', 'uses' => 'EscolaProfessorController@show']);

    Route::get('destroy/{id}', ['as' => 'escola.professor.destroy', 'uses' => 'EscolaProfessorController@destroy']);

    Route::get('edit/{id}', ['as' => 'escola.professor.edit', 'uses' => 'EscolaProfessorController@edit']);

    Route::get('create', ['as' => 'escola.professor.create', 'uses' => 'EscolaProfessorController@create']);

    Route::post('update/{id}', ['as' => 'escola.professor.update', 'uses' => 'EscolaProfessorController@update']);

    Route::post('filtrar', ['as' => 'escola.professor.filtrar', 'uses' => 'EscolaProfessorController@filtrar']);

    Route::post('store', ['as' => 'escola.professor.store', 'uses' => 'EscolaProfessorController@store']);

});