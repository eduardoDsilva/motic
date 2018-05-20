<?php

//telas escola

//home
Route::get('admin/disciplinas/home', 'Admin\Disciplinas\AdminDisciplinaController@index')->name('admin/disciplinas/home');
//update
Route::post("admin/disciplinas/{id}", 'Admin\Disciplinas\AdminDisciplinaController@update');
//deletar
Route::get("admin/disciplinas/deletar/{id}/excluir", "Admin\Disciplinas\AdminDisciplinaController@destroy");
//formulario de editar
Route::get("admin/disciplinas/update/{id}/editar", "Admin\Disciplinas\AdminDisciplinaController@edit");
//create
Route::post('admin/disciplinas/cadastro/registro', 'Admin\Disciplinas\AdminDisciplinaController@store')->name('admin/disciplinas/cadastro/registro');
//exibir
Route::get('admin/disciplinas/busca/buscar', 'Admin\Disciplinas\AdminDisciplinaController@show')->name('admin/disciplinas/busca/buscar');