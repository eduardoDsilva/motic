<?php

//telas escola

//home
Route::get('admin/disciplinas/home', 'Admin\Disciplinas\AdminDisciplinaController@index')->name('admin/disciplinas/home');
//update
Route::post("admin/disciplinas/{id}", 'Admin\Disciplinas\AdminDisciplinaController@update');
//deletar
Route::get("admin/disciplinas/destroy/{id}", "Admin\Disciplinas\AdminDisciplinaController@destroy");
//formulario de edita
Route::get("admin/disciplinas/update/{id}/edita", "Admin\Disciplinas\AdminDisciplinaController@edit")->name('admin/disciplinas/edita/editar');
//create
Route::post('admin/disciplinas/cadastro/registro', 'Admin\Disciplinas\AdminDisciplinaController@store')->name('admin/disciplinas/cadastro/registro');
