<?php

Route::group(['middleware' => 'auth','prefix' => 'escola/aluno'], function () {
//home
    Route::get('/', 'Escola\Aluno\EscolaAlunoController@index')->name('/home');
//exibir aluno
    Route::get('/show/{id}', 'Escola\Aluno\EscolaAlunoController@show');
//update
    Route::post("/{id}", 'Escola\Aluno\EscolaAlunoController@update');
//deletar
    Route::get("/destroy/{id}", "Escola\Aluno\EscolaAlunoController@destroy");
//formulario de edita
    Route::get("/update/{id}/edita", "Escola\Aluno\EscolaAlunoController@edit");
//formulario de registrar
    Route::get('/cadastro/registro', 'Escola\Aluno\EscolaAlunoController@create')->name('escola/aluno/cadastro/registro');
//create
    Route::post('/cadastro/registro', 'Escola\Aluno\EscolaAlunoController@store')->name('escola/aluno/cadastro/registro');

    Route::get('/json-aluno', 'Escola\Aluno\EscolaAlunoController@escolaCategoria');
});