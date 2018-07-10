<?php

Route::middleware(['auth', 'check.professor'])->group(function () {

    Route::get('professor/home', ['as' => 'professor', 'uses' => 'Professor\ProfessorController@index']);

    require_once('projeto/projeto.php');

    require_once('conta/conta.php');

});