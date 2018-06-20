<?php

Route::prefix('avaliador/conta')->group(function () {

    Route::get('/home', 'Avaliador\Conta\AvaliadorContaController@index')->name('avaliador/conta/home');
});