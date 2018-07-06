<?php

Route::middleware(['auth', 'check.admin'])->group(function () {

    Route::get('admin/home',['as' => 'admin', 'uses' => 'Admin\AdminController@index']);

    require_once ('auditoria/auditoria.php');

    require_once ('aluno/aluno.php');

    require_once ('professor/professor.php');

    require_once ('escola/escola.php');

    require_once ('avaliador/avaliador.php');

    require_once ('projeto/projeto.php');

    require_once ('suplente/suplente.php');

    require_once ('disciplinas/disciplinas.php');

});

