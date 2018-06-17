<?php
Route::group(['middleware' => 'auth','prefix' => 'admin/projeto'], function () {

//home
    Route::get('/home', 'Admin\Projeto\AdminProjetoController@index')->name('admin/projeto/home');
//update
    Route::post("/{id}", 'Admin\Projeto\AdminProjetoController@update');
//exibir projeto
    Route::get('/show/{id}/suplente', 'Admin\Projeto\AdminProjetoController@showSuplente');
//exibir projeto
    Route::get('/show/{id}', 'Admin\Projeto\AdminProjetoController@show');
//deletar
    Route::get("/destroy/{id}/{projeto}", "Admin\Projeto\AdminProjetoController@destroy");
//formulario de edita
    Route::get("/update/{id}/edita", "Admin\Projeto\AdminProjetoController@edit");
//formulario de registrar
    Route::get('/cadastro/registro', 'Admin\Projeto\AdminProjetoController@create')->name('admin/projeto/cadastro/registro');
//create
    Route::post('/cadastro/registro', 'Admin\Projeto\AdminProjetoController@store')->name('admin/projeto/cadastro/registro');
});
    Route::get('/json-categorias-projeto', 'Admin\Projeto\AdminProjetoController@categorias');

    Route::get('/json-alunos', 'Admin\Projeto\AdminProjetoController@alunos');

    Route::get('/json-professores', 'Admin\Projeto\AdminProjetoController@professores');

