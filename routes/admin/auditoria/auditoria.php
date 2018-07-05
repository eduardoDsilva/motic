<?php

Route::group(['prefix' => 'admin/auditoria',  'namespace' => 'Admin\Auditoria'], function(){

    Route::get('/',['as' => 'admin.auditoria', 'uses' => 'AdminAuditoriaController@index']);
    Route::post('filtrar',['as' => 'admin.auditoria.filtrar', 'uses' => 'AdminAuditoriaController@filtrar']);

});