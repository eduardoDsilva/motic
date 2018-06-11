<?php

//home
Route::get('escola/professor/home', 'Escola\Professor\EscolaProfessorController@index')->name('escola/professor/home');
//exibir professor
Route::get('escola/professor/show/{id}', 'Escola\Professor\EscolaProfessorController@show');
//update
Route::post("escola/professor/{id}", 'Escola\Professor\EscolaProfessorController@update');
//deletar
Route::get("escola/professor/destroy/{id}", "Escola\Professor\EscolaProfessorController@destroy");
//formulario de edita
Route::get("escola/professor/update/{id}/edita", "Escola\Professor\EscolaProfessorController@edit");
//formulario de registrar
Route::get('escola/professor/cadastro/registro', 'Escola\Professor\EscolaProfessorController@create')->name('escola/professor/cadastro/registro');
//create
Route::post('escola/professor/cadastro/registro', 'Escola\Professor\EscolaProfessorController@store')->name('escola/professor/cadastro/registro');
