<?php

Route::prefix('admin/aluno/relatorios')->group(function () {

    Route::get('/', 'Admin\Aluno\AdminAlunoRelatorioController@index')->name('admin/aluno/relatorios');

    //todos alunos exibe
    Route::get('/todosExibe', 'Admin\Aluno\AdminAlunoRelatorioController@todosAlunosExibe')->name('admin/aluno/relatorios/todosExibe');

    //todos alunos baixa
    Route::get('/todosBaixa', 'Admin\Aluno\AdminAlunoRelatorioController@todosAlunosBaixa')->name('admin/aluno/relatorios/todosBaixa');

});