<?php

Route::prefix('admin/escola')->group(function () {
    //home
    Route::get('/', 'Admin\Escola\AdminEscolaController@index')->name('admin/escola/home');
    //exibir aluno
    Route::get('/show/{id}', 'Admin\Escola\AdminEscolaController@show');
    //update
    Route::post("/{id}", 'Admin\Escola\AdminEscolaController@update');
    //pesquisar
    Route::post("/show", 'Admin\Escola\AdminEscolaController@show');
    //deletar
    Route::get("/destroy/{id}", "Admin\Escola\AdminEscolaController@destroy");
    //formulario de edita
    Route::get("/update/{id}/edita", "Admin\Escola\AdminEscolaController@edit");
    //formulario de registrar
    Route::get('/cadastro/registro', 'Admin\Escola\AdminEscolaController@create')->name('admin/escola/cadastro/registro');
    //create
    Route::post('/cadastro/registro', 'Admin\Escola\AdminEscolaController@store')->name('admin/escola/cadastro/registro');

});