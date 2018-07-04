<?php

Route::prefix('admin/escola/relatorios')->group(function () {

    //home relatórios
    Route::get('/', 'Admin\Escola\AdminEscolaRelatorioController@index')->name('admin/escola/relatorios');

});