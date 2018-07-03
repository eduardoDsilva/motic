<?php

Route::prefix('admin/disciplinas/relatorios')->group(function () {

    //home relatórios
    Route::get('/', 'Admin\Disciplinas\AdminDisciplinasRelatorioController@index')->name('admin/disciplinas/relatorios');

});