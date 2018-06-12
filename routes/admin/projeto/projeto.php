<?php

//home
Route::get('admin/projeto/home', 'Admin\Projeto\AdminProjetoController@index')->name('admin/projeto/home');
//home
Route::get('admin/projeto/suplentes', 'Admin\Projeto\AdminProjetoController@suplentes')->name('admin/projeto/suplentes');
//update
Route::post("admin/projeto/{id}", 'Admin\Projeto\AdminProjetoController@update');
//exibir projeto
Route::get('admin/projeto/show/{id}/suplente', 'Admin\Projeto\AdminProjetoController@showSuplente');
//exibir projeto
Route::get('admin/projeto/show/{id}', 'Admin\Projeto\AdminProjetoController@show');
//deletar
Route::get("admin/projeto/destroy/{id}/{projeto}", "Admin\Projeto\AdminProjetoController@destroy");
//formulario de edita
Route::get("admin/projeto/update/{id}/edita", "Admin\Projeto\AdminProjetoController@edit");
//formulario de registrar
Route::get('admin/projeto/cadastro/registro', 'Admin\Projeto\AdminProjetoController@create')->name('admin/projeto/cadastro/registro');
//create
Route::post('admin/projeto/cadastro/registro', 'Admin\Projeto\AdminProjetoController@store')->name('admin/projeto/cadastro/registro');

Route::get('/json-categorias','Admin\Projeto\AdminProjetoController@categorias');

Route::get('/json-alunos','Admin\Projeto\AdminProjetoController@alunos');

Route::get('/json-professores','Admin\Projeto\AdminProjetoController@professores');