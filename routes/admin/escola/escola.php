<?php


Route::group(['prefix' => 'admin/escola',  'namespace' => 'Admin\Escola'], function(){

    Route::get('/',['as' => 'admin.escola', 'uses' => 'AdminEscolaController@index']);

    Route::get('show/{id}',['as' => 'admin.escola.show', 'uses' => 'AdminEscolaController@show']);

    Route::get('destroy/{id}',['as' => 'admin.escola.destroy', 'uses' => 'AdminEscolaController@destroy']);

    Route::get('edit/{id}',['as' => 'admin.escola.edit', 'uses' => 'AdminEscolaController@edit']);

    Route::get('create',['as' => 'admin.escola.create', 'uses' => 'AdminEscolaController@create']);

    Route::post('update/{id}',['as' => 'admin.escola.update', 'uses' => 'AdminEscolaController@update']);

    Route::post('filtrar',['as' => 'admin.escola.filtrar', 'uses' => 'AdminEscolaController@filtrar']);

    Route::post('store',['as' => 'admin.escola.store', 'uses' => 'AdminEscolaController@store']);

    Route::get('relatorios',['as' => 'admin.escola.relatorios', 'uses' => 'AdminEscolaRelatorioController@index']);

});