<?php

Route::prefix('admin/avaliador')->group(function () {
//home
    Route::get('/', 'Admin\Avaliador\AdminAvaliadorController@index')->name('admin/avaliador/home');
//exibir aluno
    Route::get('/show/{id}', 'Admin\Avaliador\AdminAvaliadorController@show');
//exibir professor
    Route::post('/filtrar', 'Admin\Avaliador\AdminAvaliadorController@filtrar')->name('admin/avaliador/filtrar');
//update
    Route::post("/{id}", 'Admin\Avaliador\AdminAvaliadorController@update');
//deletar
    Route::get("/destroy/{id}", "Admin\Avaliador\AdminAvaliadorController@destroy");
//formulario de edita
    Route::get("/update/{id}/edita", "Admin\Avaliador\AdminAvaliadorController@edit");
//formulario de registrar
    Route::get('/cadastro/registro', 'Admin\Avaliador\AdminAvaliadorController@create')->name('admin/avaliador/registro');
//create
    Route::post('/cadastro/registro', 'Admin\Avaliador\AdminAvaliadorController@store')->name('admin/avaliador/registro');
//create
    Route::get('/atribuir/{id}', 'Admin\Avaliador\AdminAvaliadorController@atribuir')->name('admin/avaliador/atribuir/{id}');

    Route::get('/showAvaliadorDisponivel', 'Admin\Avaliador\AdminAvaliadorController@showAvaliadorDisponivel')->name('admin/avaliador/showAvaliadorDisponivel');
//
});

Route::post('admin/avaliador/atribui', 'Admin\Avaliador\AdminAvaliadorController@atribui')->name('admin/avaliador/atribui');

