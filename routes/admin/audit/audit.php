<?php

Route::group(['prefix' => 'admin/auditoria', 'namespace' => 'Audit'], function () {


    Route::get('/', ['as' => 'admin.auditoria', 'uses' => 'AuditController@index']);

    Route::post('filtrar', ['as' => 'admin.auditoria.filtrar', 'uses' => 'AuditController@filtrar']);

    Route::get('/relatorios/registros', ['as' => 'admin.auditoria.registros', 'uses' => 'AuditController@export']);

    Route::get('relatorios', ['as' => 'admin.auditoria.relatorios', 'uses' => 'AuditController@relatorios']);

    Route::post('filtrar/relatorios/usuarios', ['as' => 'admin.auditoria.relatorios.user.filtrar', 'uses' => 'AuditController@filtrarUsuarios']);

    Route::get('relatorios/registro-individual/{id}', ['as' => 'admin.auditoria.relatorios.registro.individual', 'uses' => 'AuditController@exportByUser']);

});