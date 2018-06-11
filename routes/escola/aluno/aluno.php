<?php

//home
Route::get('escola/aluno/home', 'Escola\Aluno\EscolaAlunoController@index')->name('escola/aluno/home');
//exibir aluno
Route::get('escola/aluno/show/{id}', 'Escola\Aluno\EscolaAlunoController@show');
//update
Route::post("escola/aluno/{id}", 'Escola\Aluno\EscolaAlunoController@update');
//deletar
Route::get("escola/aluno/destroy/{id}", "Escola\Aluno\EscolaAlunoController@destroy");
//formulario de edita
Route::get("escola/aluno/update/{id}/edita", "Escola\Aluno\EscolaAlunoController@edit");
//formulario de registrar
Route::get('escola/aluno/cadastro/registro', 'Escola\Aluno\EscolaAlunoController@create')->name('escola/aluno/cadastro/registro');
//create
Route::post('escola/aluno/cadastro/registro', 'Escola\Aluno\EscolaAlunoController@store')->name('escola/aluno/cadastro/registro');

Route::get('/json-aluno','Escola\Aluno\EscolaAlunoController@escolaCategoria');
