<?php
Route::group(['prefix' => 'admin/etapa', 'namespace' => 'Admin\Etapa'], function () {

     Route::get('/', ['as' => 'admin.etapa', 'uses' => 'AdminEtapaController@index']);

     Route::post('/store', ['as' => 'admin.etapa.store', 'uses' => 'AdminEtapaController@store']);

    Route::get('/edit/{id}', ['as' => 'admin.etapa.edit', 'uses' => 'AdminEtapaController@edit']);

    Route::post('/update/{id}', ['as' => 'admin.etapa.update', 'uses' => 'AdminEtapaController@update']);

});