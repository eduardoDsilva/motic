<?php

Route::prefix('admin/auditoria/relatorios')->group(function () {

    //home relatórios
    Route::get('/', 'Admin\Auditoria\AdminAuditoriaRelatorioController@index')->name('admin/auditoria/relatorios');

    Route::get('/todos', 'Admin\Auditoria\AdminAuditoriaRelatorioController@todosRegistros')->name('admin/auditoria/relatorios/todos');

    Route::get('/escolaExibe', 'Admin\Auditoria\AdminAuditoriaRelatorioController@escolaAlunosPdf')->name('admin/auditoria/relatorios/escolaExibe');

    Route::get('/todosCompletoExibe', 'Admin\Auditoria\AdminAuditoriaRelatorioController@alunoCompletoPdf')->name('admin/auditoria/relatorios/todosCompletoExibe');

    Route::post('/alunoExibe', 'Admin\Auditoria\AdminAuditoriaRelatorioController@alunoPdf')->name('admin/auditoria/relatorios/alunoExibe');

});