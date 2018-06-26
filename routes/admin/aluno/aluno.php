<?php

Route::prefix('admin/aluno')->group(function () {
    //home
    Route::get('/', 'Admin\Aluno\AdminAlunoController@index')->name('admin/aluno/home');
//exibir aluno
    Route::get('/show/{id}', 'Admin\Aluno\AdminAlunoController@show');
    //exibir alunos
    Route::post('/filtrar', 'Admin\Aluno\AdminAlunoController@filtrar')->name('admin/aluno/filtrar');
//update
    Route::post("/{id}", 'Admin\Aluno\AdminAlunoController@update');
//deletar
    Route::get("/destroy/{id}", "Admin\Aluno\AdminAlunoController@destroy");
//formulario de edita
    Route::get("/update/{id}/edita", "Admin\Aluno\AdminAlunoController@edit");
//formulario de registrar
    Route::get('/cadastro/registro', 'Admin\Aluno\AdminAlunoController@create')->name('admin/aluno/cadastro/registro');
//create
    Route::post('/cadastro/registro', 'Admin\Aluno\AdminAlunoController@store')->name('admin/aluno/cadastro/registro');
});

Route::get('/json-ano','Admin\Aluno\AdminAlunoController@escolaCategoria');



