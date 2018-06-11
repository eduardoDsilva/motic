<?php

//home
Route::get('escola/projeto/home', 'Escola\Projeto\EscolaProjetoController@index')->name('escola/projeto/home');
//update
Route::post("escola/projeto/{id}", 'Escola\Projeto\EscolaProjetoController@update');
//exibir projeto
Route::get('escola/projeto/show/{id}/suplente', 'Escola\Projeto\EscolaProjetoController@showSuplente');
Route::get('escola/projeto/show/{id}/suplente', 'Escola\Projeto\EscolaProjetoController@showSuplente');
//exibir projeto
Route::get('escola/projeto/show/{id}', 'Escola\Projeto\EscolaProjetoController@show');
//deletar
Route::get("escola/projeto/destroy/{id}", "Escola\Projeto\EscolaProjetoController@destroy");
//formulario de edita
Route::get("escola/projeto/update/{id}/edita", "Escola\Projeto\EscolaProjetoController@edit");
//formulario de registrar
Route::get('escola/projeto/cadastro/registro', 'Escola\Projeto\EscolaProjetoController@create')->name('escola/projeto/cadastro/registro');
//create
Route::post('escola/projeto/cadastro/registro', 'Escola\Projeto\EscolaProjetoController@store')->name('escola/projeto/cadastro/registro');

Route::get('/json-categorias','Escola\Projeto\EscolaProjetoController@categorias');

Route::get('/json-alunos','Escola\Projeto\EscolaProjetoController@alunos');

Route::get('/json-professores','Escola\Projeto\EscolaProjetoController@professores');