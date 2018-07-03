<?php

Route::prefix('admin/avaliador/relatorios')->group(function () {

    //home relatórios
    Route::get('/', 'Admin\Avaliador\AdminAvaliadorRelatorioController@index')->name('admin/avaliador/relatorios');

});