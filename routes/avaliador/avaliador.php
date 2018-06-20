<?php

Route::middleware(['auth', 'check.avaliador'])->group(function () {

    Route::get('avaliador/home', 'Avaliador\AvaliadorController@index')->name('avaliador/home');

    require_once ('projeto/projeto.php');

    require_once ('conta/conta.php');

});