<?php

Route::group(['middleware' => 'auth','prefix' => 'admin/professor'], function () {
//home
    Route::get('/home', 'Admin\Professor\AdminProfessorController@index')->name('admin/professor/home');
//exibir professor
    Route::get('/show/{id}', 'Admin\Professor\AdminProfessorController@show');
//update
    Route::post("/{id}", 'Admin\Professor\AdminProfessorController@update');
//deletar
    Route::get("/destroy/{id}", "Admin\Professor\AdminProfessorController@destroy");
//formulario de edita
    Route::get("/update/{id}/edita", "Admin\Professor\AdminProfessorController@edit");
//formulario de registrar
    Route::get('/cadastro/registro', 'Admin\Professor\AdminProfessorController@create')->name('admin/professor/cadastro/registro');
//create
    Route::post('/cadastro/registro', 'Admin\Professor\AdminProfessorController@store')->name('admin/professor/cadastro/registro');
});