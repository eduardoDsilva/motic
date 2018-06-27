<?php

Route::prefix('admin/aluno/relatorios')->group(function () {

    //home relatórios
    Route::get('/', 'Admin\Aluno\AdminAlunoRelatorioController@index')->name('admin/aluno/relatorios');

    //todos alunos exibe
    Route::get('/todosExibe', 'Admin\Aluno\AdminAlunoRelatorioController@alunosResumidoPdf')->name('admin/aluno/relatorios/todosExibe');

    //alunos por escola
    Route::get('/escolaExibe', 'Admin\Aluno\AdminAlunoRelatorioController@escolaAlunosPdf')->name('admin/aluno/relatorios/escolaExibe');

    Route::get('/todosCompletoExibe', 'Admin\Aluno\AdminAlunoRelatorioController@alunoCompletoPdf')->name('admin/aluno/relatorios/todosCompletoExibe');

    Route::post('/alunoExibe', 'Admin\Aluno\AdminAlunoRelatorioController@alunoPdf')->name('admin/aluno/relatorios/alunoExibe');

});