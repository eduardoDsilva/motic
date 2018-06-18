<?php

Route::prefix('escola/professor')->group(function () {
//home
    Route::get('/home', 'Escola\Professor\EscolaProfessorController@index')->name('escola/professor/home');
//exibir professor
    Route::get('/show/{id}', 'Escola\Professor\EscolaProfessorController@show');
//update
    Route::post("/{id}", 'Escola\Professor\EscolaProfessorController@update');
//deletar
    Route::get("/destroy/{id}", "Escola\Professor\EscolaProfessorController@destroy");
//formulario de edita
    Route::get("/update/{id}/edita", "Escola\Professor\EscolaProfessorController@edit");
//formulario de registrar
    Route::get('/cadastro/registro', 'Escola\Professor\EscolaProfessorController@create')->name('escola/professor/cadastro/registro');
//create
    Route::post('/cadastro/registro', 'Escola\Professor\EscolaProfessorController@store')->name('escola/professor/cadastro/registro');

});