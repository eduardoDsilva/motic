<?php


Route::group(['prefix' => 'admin/disciplina', 'namespace' => 'Admin\Disciplina'], function () {

    Route::get('/', ['as' => 'admin.disciplina', 'uses' => 'AdminDisciplinaController@index']);

    Route::get('destroy/{id}', ['as' => 'admin.disciplina.destroy', 'uses' => 'AdminDisciplinaController@destroy']);

    Route::get('edit/{id}', ['as' => 'admin.disciplina.edit', 'uses' => 'AdminDisciplinaController@edit']);

    Route::get('create', ['as' => 'admin.disciplina.create', 'uses' => 'AdminDisciplinaController@create']);

    Route::post('update/{id}', ['as' => 'admin.disciplina.update', 'uses' => 'AdminDisciplinaController@update']);

    Route::post('filtrar', ['as' => 'admin.disciplina.filtrar', 'uses' => 'AdminDisciplinaController@filtrar']);

    Route::post('store', ['as' => 'admin.disciplina.store', 'uses' => 'AdminDisciplinaController@store']);


});