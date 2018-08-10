<?php

Route::middleware(['auth', 'check.avaliador'])->group(function () {

    Route::get('avaliador/home', ['as' => 'avaliador', 'uses' => 'Avaliador\AvaliadorController@index']);

    require_once('projeto/projeto.php');

    require_once('conta/conta.php');

});