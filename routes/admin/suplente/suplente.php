<?php

Route::prefix('admin/suplente')->group(function () {
//home
    Route::get('/home', 'Admin\Suplente\AdminSuplenteController@index')->name('admin/suplente/home');
//update
    Route::post("/{id}", 'Admin\Suplente\AdminSuplenteController@update');
//exibir projeto
    Route::get('/show/{id}/suplente', 'Admin\Suplente\AdminSuplenteController@showSuplente');
//exibir projeto
    Route::get('/show/{id}', 'Admin\Suplente\AdminSuplenteController@show');
//deletar
    Route::get("/destroy/{id}/{projeto}", "Admin\Suplente\AdminSuplenteController@destroy");
//formulario de edita
    Route::get("/update/{id}/edita", "Admin\Suplente\AdminSuplenteController@edit");
//formulario de registrar
    Route::get('/cadastro/registro', 'Admin\Suplente\AdminSuplenteController@create')->name('admin/suplente/cadastro/registro');
//create
    Route::post('/cadastro/registro', 'Admin\Suplente\AdminSuplenteController@store')->name('admin/suplente/cadastro/registro');
});
Route::get('/json-categorias-suplente','Admin\Suplente\AdminSuplenteController@categorias');

Route::get('/json-alunos','Admin\Suplente\AdminSuplenteController@alunos');

Route::get('/json-professores','Admin\Suplente\AdminSuplenteController@professores');