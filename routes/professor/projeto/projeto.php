<?php

Route::prefix('professor/projeto')->group(function () {

    Route::get('/', 'Professor\Projeto\ProfessorProjetoController@index')->name('professor/projeto/home');
});