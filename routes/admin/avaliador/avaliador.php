<?php

//home
Route::get('admin/avaliador/home', 'Admin\Avaliador\AdminAvaliadorController@index')->name('admin/avaliador/home');
//update
Route::post("admin/avaliador/{id}", 'Admin\Avaliador\AdminAvaliadorController@update');
//deletar
Route::get("admin/avaliador/deletar/{id}/excluir", "Admin\Avaliador\AdminAvaliadorController@destroy");
//formulario de editar
Route::get("admin/avaliador/update/{id}/editar", "Admin\Avaliador\AdminAvaliadorController@edit");
//formulario de registrar
Route::get('admin/avaliador/cadastro/registro', 'Admin\Avaliador\AdminAvaliadorController@create')->name('admin/avaliador/cadastro/registro');
//create
Route::post('admin/avaliador/cadastro/registro', 'Admin\Avaliador\AdminAvaliadorController@store')->name('admin/avaliador/cadastro/registro');
//exibir
Route::get('admin/avaliador/busca/buscar', 'Admin\Avaliador\AdminAvaliadorController@show')->name('admin/avaliador/busca/buscar');