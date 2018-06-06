<?php

//home
Route::get('admin/professor/home', 'Admin\Professor\AdminProfessorController@index')->name('admin/professor/home');
//update
Route::post("admin/professor/{id}", 'Admin\Professor\AdminProfessorController@update');
//deletar
Route::get("admin/professor/destroy/{id}", "Admin\Professor\AdminProfessorController@destroy");
//formulario de edita
Route::get("admin/professor/update/{id}/edita", "Admin\Professor\AdminProfessorController@edit");
//formulario de registrar
Route::get('admin/professor/cadastro/registro', 'Admin\Professor\AdminProfessorController@create')->name('admin/professor/cadastro/registro');
//create
Route::post('admin/professor/cadastro/registro', 'Admin\Professor\AdminProfessorController@store')->name('admin/professor/cadastro/registro');
