<?php

//home
Route::get('admin/projeto/home', 'Admin\Projeto\AdminProjetoController@index')->name('admin/projeto/home');
//update
Route::post("admin/projeto/{id}", 'Admin\Projeto\AdminProjetoController@update');
//deletar
Route::get("admin/projeto/destroy/{id}", "Admin\Projeto\AdminProjetoController@destroy");
//formulario de edita
Route::get("admin/projeto/update/{id}/edita", "Admin\Projeto\AdminProjetoController@edit");
//formulario de registrar
Route::get('admin/projeto/cadastro/registro', 'Admin\Projeto\AdminProjetoController@create')->name('admin/projeto/cadastro/registro');
//create
Route::post('admin/projeto/cadastro/registro', 'Admin\Projeto\AdminProjetoController@store')->name('admin/projeto/cadastro/registro');
//exibir
Route::get('admin/projeto/busca/buscar', 'Admin\Projeto\AdminProjetoController@show')->name('admin/projeto/busca/buscar');