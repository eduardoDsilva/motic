<?php

Route::prefix('escola/projeto')->group(function () {

//home
    Route::get('/home', 'Escola\Projeto\EscolaProjetoController@index')->name('escola/projeto/home');
//update
    Route::post("/{id}", 'Escola\Projeto\EscolaProjetoController@update');
//exibir projeto
    Route::get('/show/{id}/suplente', 'Escola\Projeto\EscolaProjetoController@showSuplente');
//exibir projeto
    Route::get('/show/{id}', 'Escola\Projeto\EscolaProjetoController@show');
//deletar
    Route::get("/destroy/{id}/{projeto}", "Admin\Projeto\AdminProjetoController@destroy");
//formulario de edita
    Route::get("/update/{id}/edita", "Escola\Projeto\EscolaProjetoController@edit");
//formulario de registrar
    Route::get('/cadastro/registro', 'Escola\Projeto\EscolaProjetoController@create')->name('escola/projeto/cadastro/registro');
//create
    Route::post('/cadastro/registro', 'Escola\Projeto\EscolaProjetoController@store')->name('escola/projeto/cadastrar');
});

Route::get('/json-aluno','Escola\Projeto\EscolaProjetoController@alunos');
