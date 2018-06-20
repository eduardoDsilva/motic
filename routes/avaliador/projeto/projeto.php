<?php

Route::prefix('professor/projeto')->group(function () {

    Route::get('/home', 'Avaliador\Projeto\AvaliadorProjetoController@index')->name('avaliador/projeto/home');
});