<?php

Route::group(['prefix' => 'escola/suplente',  'namespace' => 'Escola\Suplente'], function(){

    Route::get('/',['as' => 'escola.suplente', 'uses' => 'EscolaSuplenteController@index']);

    Route::get('show/{id}',['as' => 'escola.suplente.show', 'uses' => 'EscolaSuplenteController@show']);

    Route::get('destroy/{id}',['as' => 'escola.suplente.destroy', 'uses' => 'EscolaSuplenteController@destroy']);

    Route::get('edit/{id}',['as' => 'escola.suplente.edit', 'uses' => 'EscolaSuplenteController@edit']);

    Route::get('create',['as' => 'escola.suplente.create', 'uses' => 'EscolaSuplenteController@create']);

    Route::post('update/{id}',['as' => 'escola.suplente.update', 'uses' => 'EscolaSuplenteController@update']);

    Route::post('filtrar',['as' => 'escola.suplente.filtrar', 'uses' => 'EscolaSuplenteController@filtrar']);

    Route::post('store',['as' => 'escola.suplente.store', 'uses' => 'EscolaSuplenteController@store']);

});