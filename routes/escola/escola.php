<?php

Route::middleware(['auth', 'check.escola'])->group(function () {

    Route::get('escola/home', ['as' => 'escola', 'uses' => 'Escola\EscolaController@index']);

    require_once('aluno/aluno.php');

    require_once('configuracoes/configuracoes.php');

    require_once('documentos/documentos.php');

    require_once('professor/professor.php');

    require_once('projeto/projeto.php');

    require_once('suplente/suplente.php');

});

