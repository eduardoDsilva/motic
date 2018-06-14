<?php

//home
Route::get('escola/projeto/home', 'Escola\Projeto\EscolaProjetoController@index')->name('escola/projeto/home');
//update
Route::post("escola/projeto/{id}", 'Escola\Projeto\EscolaProjetoController@update');
//exibir projeto
Route::get('escola/projeto/show/{id}/suplente', 'Escola\Projeto\EscolaProjetoController@showSuplente');
//exibir projeto
Route::get('escola/projeto/show/{id}', 'Escola\Projeto\EscolaProjetoController@show');
//deletar
Route::get("escola/projeto/destroy/{id}/{projeto}", "Admin\Projeto\AdminProjetoController@destroy");
//formulario de edita
Route::get("escola/projeto/update/{id}/edita", "Escola\Projeto\EscolaProjetoController@edit");
//formulario de registrar
Route::get('escola/projeto/cadastro/registro', 'Escola\Projeto\EscolaProjetoController@create')->name('escola/projeto/cadastro/registro');
//create
Route::post('escola/projeto/cadastro/registro', 'Escola\Projeto\EscolaProjetoController@store')->name('escola/projeto/cadastrar');

Route::get('/json-aluno','Escola\Projeto\EscolaProjetoController@alunos');
