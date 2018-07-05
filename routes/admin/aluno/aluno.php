<?php

Route::group(['prefix' => 'admin/aluno',  'namespace' => 'Admin\Aluno'], function(){

    Route::get('/',['as' => 'admin.aluno', 'uses' => 'AdminAlunoController@index']);

    Route::get('show/{id}',['as' => 'admin.aluno.show', 'uses' => 'AdminAlunoController@show']);

    Route::get('destroy/{id}',['as' => 'admin.aluno.destroy', 'uses' => 'AdminAlunoController@destroy']);

    Route::get('edit/{id}',['as' => 'admin.aluno.edit', 'uses' => 'AdminAlunoController@edit']);

    Route::get('create',['as' => 'admin.aluno.create', 'uses' => 'AdminAlunoController@create']);

    Route::post('update/{id}',['as' => 'admin.aluno.update', 'uses' => 'AdminAlunoController@update']);

    Route::post('filtrar',['as' => 'admin.aluno.filtrar', 'uses' => 'AdminAlunoController@filtrar']);

    Route::post('store',['as' => 'admin.aluno.store', 'uses' => 'AdminAlunoController@store']);

});

Route::get('/json-ano','Admin\Aluno\AdminAlunoController@escolaCategoria');



