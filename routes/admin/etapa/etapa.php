<?php
Route::group(['prefix' => 'admin/etapa', 'namespace' => 'Admin\Etapa'], function () {

     Route::get('/', ['as' => 'admin.etapa', 'uses' => 'AdminEtapaController@index']);

     Route::post('/store', ['as' => 'admin.etapa.store', 'uses' => 'AdminEtapaController@store']);

});