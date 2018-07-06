<?php

Route::group(['prefix' => 'admin/auditoria',  'namespace' => 'Admin\Auditoria'], function(){

    Route::get('/',['as' => 'admin.auditoria', 'uses' => 'AdminAuditoriaController@index']);

    Route::post('filtrar',['as' => 'admin.auditoria.filtrar', 'uses' => 'AdminAuditoriaController@filtrar']);

    Route::post('filtrar/relatorios/registros',['as' => 'admin.auditoria.relatorios.filtrar', 'uses' => 'AdminAuditoriaRelatorioController@filtrar']);

    Route::post('filtrar/relatorios/usuarios',['as' => 'admin.auditoria.relatorios.user.filtrar', 'uses' => 'AdminAuditoriaRelatorioController@filtrarUsuarios']);

    Route::get('relatorios',['as' => 'admin.auditoria.relatorios', 'uses' => 'AdminAuditoriaRelatorioController@index']);

    Route::get('relatorios/todos-registros',['as' => 'admin.auditoria.relatorios.todos.registros', 'uses' => 'AdminAuditoriaRelatorioController@todosRegistros']);

    Route::get('relatorios/registro-individual',['as' => 'admin.auditoria.relatorios.registro.individual', 'uses' => 'AdminAuditoriaRelatorioController@registroIndividual']);

    Route::get('relatorios/registros-por-usuarios',['as' => 'admin.auditoria.relatorios.registros.por.usuarios', 'uses' => 'AdminAuditoriaRelatorioController@registrosPorUsuarios']);

    Route::get('relatorios/registros-por-usuario',['as' => 'admin.auditoria.relatorios.registros.por.usuario', 'uses' => 'AdminAuditoriaRelatorioController@registrosPorUsuario']);




});