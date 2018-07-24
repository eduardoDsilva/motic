<?php

Route::group(['prefix' => 'admin/avaliador', 'namespace' => 'Admin\Avaliador'], function () {

    Route::get('/', ['as' => 'admin.avaliador', 'uses' => 'AdminAvaliadorController@index']);

    Route::get('show/{id}', ['as' => 'admin.avaliador.show', 'uses' => 'AdminAvaliadorController@show']);

    Route::get('destroy/{id}', ['as' => 'admin.avaliador.destroy', 'uses' => 'AdminAvaliadorController@destroy']);

    Route::get('edit/{id}', ['as' => 'admin.avaliador.edit', 'uses' => 'AdminAvaliadorController@edit']);

    Route::get('create', ['as' => 'admin.avaliador.create', 'uses' => 'AdminAvaliadorController@create']);

    Route::post('update/{id}', ['as' => 'admin.avaliador.update', 'uses' => 'AdminAvaliadorController@update']);

    Route::post('filtrar', ['as' => 'admin.avaliador.filtrar', 'uses' => 'AdminAvaliadorController@filtrar']);

    Route::post('store', ['as' => 'admin.avaliador.store', 'uses' => 'AdminAvaliadorController@store']);

    Route::get('relatorios', ['as' => 'admin.avaliador.relatorios', 'uses' => 'AdminAvaliadorRelatorioController@index']);

    Route::get('vincular-projetos/{id}', ['as' => 'admin.avaliador.vincular-projetos', 'uses' => 'AdminAvaliadorController@vincularProjetos']);

    Route::get('desvincular-projetos/{id}', ['as' => 'admin.avaliador.desvincular-projetos', 'uses' => 'AdminAvaliadorController@desvincularProjetos']);

    Route::get('vincula-projetos/{id}', ['as' => 'admin.avaliador.desvincula-projetos', 'uses' => 'AdminAvaliadorController@desvinculaProjetos']);

    Route::post('vincula-projetos', ['as' => 'admin.avaliador.vincula-projetos', 'uses' => 'AdminAvaliadorController@vinculaProjetos']);

});
