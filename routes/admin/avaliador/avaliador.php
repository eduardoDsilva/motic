<?php

//telas avaliador

//tela principal do admin-avaliador
Route::get('admin/avaliador/home', 'Admin\Avaliador\AdminAvaliadorController@index')->name('admin/avaliador/home');

//realiza o update com os dados vindos da tela de edicao
Route::post("/admin/avaliador/{id}", 'Admin\avaliador\AdminAvaliadorController@update');

//deleta um avaliador do banco
Route::get("admin/avaliador/deletar/{id}/excluir", "Admin\avaliador\AdminAvaliadorController@delete");

//encaminha para a tela de edição, com os dados ja carregados nos campos
Route::get("/admin/avaliador/update/{id}/editar", "Admin\avaliador\AdminAvaliadorController@editar");

//tela de cadastro de avaliadores pelo admin
Route::get('admin/avaliador/cadastro/registro', 'Admin\Avaliador\AdminAvaliadorController@paginaCadastrarAvaliador')->name('admin/avaliador/cadastro/registro');

//encaminha o post para AvaliadorController. Lá é feita a mágica de cadastrar no banco de dados.
Route::post('admin/avaliador/cadastro/registro', 'admin\avaliador\AdminAvaliadorController@store')->name('admin/avaliador/cadastro/registro');

//encaminha para a tela de listar avaliadores
Route::get('admin/avaliador/busca/buscar', 'Admin\Avaliador\AdminAvaliadorController@buscar')->name("admin/avaliador/busca/buscar");