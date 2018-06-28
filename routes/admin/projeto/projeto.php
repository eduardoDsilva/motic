<?php

Route::prefix('admin/projeto')->group(function () {
//home
    Route::get('/home', 'Admin\Projeto\AdminProjetoController@index')->name('admin/projeto/home');
//exibir projeto
    Route::get('/show/{id}/suplente', 'Admin\Projeto\AdminProjetoController@showSuplente');
    //filtrar projetos
    Route::post('/filtrar', 'Admin\Projeto\AdminProjetoController@filtrar')->name('admin/projeto/filtrar');
//exibir projeto
    Route::get('/show/{id}', 'Admin\Projeto\AdminProjetoController@show');
//deletar
    Route::get("/destroy/{id}", "Admin\Projeto\AdminProjetoController@destroy");
//formulario de edita
    Route::get("/update/{id}/edita", "Admin\Projeto\AdminProjetoController@edit");
//formulario de registrar
    Route::get('/cadastro/registro', 'Admin\Projeto\AdminProjetoController@create')->name('admin/projeto/cadastro/registro');
//create
    Route::post('/cadastro/registro', 'Admin\Projeto\AdminProjetoController@store')->name('admin/projeto/cadastro/registro');
    //rebaixa
    Route::get('/rebaixa/{id}', 'Admin\Projeto\AdminProjetoController@rebaixaSuplente');
    //update
    Route::post("/{id}", 'Admin\Projeto\AdminProjetoController@update');
});
    Route::get('/json-categorias-projeto', 'Admin\Projeto\AdminProjetoController@categorias');

    Route::get('/json-alunos', 'Admin\Projeto\AdminProjetoController@alunos');

    Route::get('/json-professores', 'Admin\Projeto\AdminProjetoController@professores');

