<?php

//home
Route::get('admin/aluno/home', 'Admin\Aluno\AdminAlunoController@index')->name('admin/aluno/home');
//update
Route::post("admin/aluno/{id}", 'Admin\Aluno\AdminAlunoController@update');
//deletar
Route::get("admin/aluno/destroy/{id}", "Admin\Aluno\AdminAlunoController@destroy");
//formulario de edita
Route::get("admin/aluno/update/{id}/edita", "Admin\Aluno\AdminAlunoController@edit");
//formulario de registrar
Route::get('admin/aluno/cadastro/registro', 'Admin\Aluno\AdminAlunoController@create')->name('admin/aluno/cadastro/registro');
//create
Route::post('admin/aluno/cadastro/registro', 'Admin\Aluno\AdminAlunoController@store')->name('admin/aluno/cadastro/registro');
