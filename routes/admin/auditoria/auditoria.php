<?php

Route::group(['prefix' => 'admin/auditoria',  'namespace' => 'Admin\Auditoria'], function(){

    Route::get('/',['as' => 'admin.auditoria', 'uses' => 'AdminAuditoriaController@index']);

    Route::post('filtrar',['as' => 'admin.auditoria.filtrar', 'uses' => 'AdminAuditoriaController@filtrar']);

    Route::get('relatorios',['as' => 'admin.auditoria.relatorios', 'uses' => 'AdminAuditoriaRelatorioController@index']);

    Route::get('relatorios/todos-registros-resumido',['as' => 'admin.auditoria.relatorios.todos.registros.resumido', 'uses' => 'AdminAuditoriaRelatorioController@todosRegistrosResumido']);

    Route::get('relatorios/todos-registros-completo',['as' => 'admin.auditoria.relatorios.todos.registros.completo', 'uses' => 'AdminAuditoriaRelatorioController@todosRegistrosCompleto']);

    Route::get('relatorios/registros-por-usuarios',['as' => 'admin.auditoria.relatorios.registros.por.usuarios', 'uses' => 'AdminAuditoriaRelatorioController@registrosPorUsuarios']);

    Route::get('relatorios/registros-por-usuario',['as' => 'admin.auditoria.relatorios.registros.por.usuario', 'uses' => 'AdminAuditoriaRelatorioController@registrosPorUsuario']);



});