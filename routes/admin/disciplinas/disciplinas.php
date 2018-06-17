<?php

//telas escola
Route::group(['middleware' => 'auth','prefix' => 'admin/disciplinas'], function () {
//home
    Route::get('/', 'Admin\Disciplinas\AdminDisciplinaController@index')->name('admin/disciplinas/home');
//update
    Route::post("/{id}", 'Admin\Disciplinas\AdminDisciplinaController@update');
//deletar
    Route::get("/destroy/{id}", "Admin\Disciplinas\AdminDisciplinaController@destroy");
//formulario de edita
    Route::get("/update/{id}/edita", "Admin\Disciplinas\AdminDisciplinaController@edit")->name('admin/disciplinas/edita/editar');
//create
    Route::post('/cadastro/registro', 'Admin\Disciplinas\AdminDisciplinaController@store')->name('admin/disciplinas/cadastro/registro');
});