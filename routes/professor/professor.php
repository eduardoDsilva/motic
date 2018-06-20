<?php

Route::middleware(['auth', 'check.professor'])->group(function () {

    Route::get('professor/home', 'Professor\ProfessorController@index')->name('professor/home');

    require_once ('projeto/projeto.php');

    require_once ('conta/conta.php');

});