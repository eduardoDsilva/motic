<?php

Route::prefix('professor/conta')->group(function () {

    Route::get('/home', 'Professor\Conta\ProfessorContaController@index')->name('professor/conta/home');
});