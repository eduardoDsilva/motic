<?php

//home
Route::get('admin/suplente/home', 'Admin\Suplente\AdminSuplenteController@index')->name('admin/suplente/home');
//update
Route::post("admin/suplente/{id}", 'Admin\Suplente\AdminSuplenteController@update');
//exibir projeto
Route::get('admin/suplente/show/{id}/suplente', 'Admin\Suplente\AdminSuplenteController@showSuplente');
//exibir projeto
Route::get('admin/suplente/show/{id}', 'Admin\Suplente\AdminSuplenteController@show');
//deletar
Route::get("admin/suplente/destroy/{id}/{projeto}", "Admin\Suplente\AdminSuplenteController@destroy");
//formulario de edita
Route::get("admin/suplente/update/{id}/edita", "Admin\Suplente\AdminSuplenteController@edit");
//formulario de registrar
Route::get('admin/suplente/cadastro/registro', 'Admin\Suplente\AdminSuplenteController@create')->name('admin/suplente/cadastro/registro');
//create
Route::post('admin/suplente/cadastro/registro', 'Admin\Suplente\AdminSuplenteController@store')->name('admin/suplente/cadastro/registro');

Route::get('/json-categorias-suplente','Admin\Suplente\AdminSuplenteController@categorias');

Route::get('/json-alunos','Admin\Suplente\AdminSuplenteController@alunos');

Route::get('/json-professores','Admin\Suplente\AdminSuplenteController@professores');