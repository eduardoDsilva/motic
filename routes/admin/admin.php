<?php

//telas admin

//tela principal admin
Route::get('admin/home', 'Admin\AdminController@index');

//tela principal do admin-escola
Route::get('admin/escola/home', 'Admin\Escola\EscolaController@index')->name('admin/escola/home');

//tela de cadastro de escolas pelo admin
Route::get('admin/escola/cadastro/registro', 'Admin\Escola\EscolaController@paginaCadastrarEscola')->name('admin/escola/cadastro/registro');

//encaminha o post para EscolaController. Lá é feita a mágica de cadastrar no banco de dados.
Route::post('admin/escola/cadastro/registro', 'Admin\Escola\EscolaController@store')->name('admin/escola/cadastro/registro');

Route::post("/admin/escola/{id}", 'Admin\Escola\EscolaController@update');

Route::post("/admin/avaliador/{id}", 'Admin\avaliador\AvaliadorController@update');

Route::get('admin/escola/busca/buscar', 'Admin\Escola\EscolaController@busca')->name("admin/escola/busca/buscar");

Route::get("admin/escola/deletar/{id}/excluir", "Admin\Escola\EscolaController@delete");

Route::get("admin/avaliador/deletar/{id}/excluir", "Admin\avaliador\AvaliadorController@delete");

Route::get("/admin/escola/update/{id}/editar", "Admin\Escola\EscolaController@editar");

Route::get("/admin/avaliador/update/{id}/editar", "Admin\avaliador\AvaliadorController@editar");

//tela principal do admin-avaliador
Route::get('admin/avaliador/home', 'Admin\Avaliador\AvaliadorController@index')->name('admin/avaliador/home');

//tela de cadastro de avaliadores pelo admin
Route::get('admin/avaliador/cadastro/registro', 'Admin\Avaliador\AvaliadorController@paginaCadastrarAvaliador')->name('admin/avaliador/cadastro/registro');

//encaminha o post para AvaliadorController. Lá é feita a mágica de cadastrar no banco de dados.
Route::post('admin/avaliador/cadastro/registro', 'admin\avaliador\AvaliadorController@store')->name('admin/avaliador/cadastro/registro');

Route::get('admin/avaliador/busca/buscar', 'Admin\Avaliador\AvaliadorController@busca')->name("admin/avaliador/busca/buscar");