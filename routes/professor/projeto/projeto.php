<?php

Route::prefix('professor/projeto')->group(function () {

    Route::get('/home', 'Professor\Projeto\ProfessorProjetoController@index')->name('professor/projeto/home');
});