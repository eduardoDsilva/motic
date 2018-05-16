<?php

//telas escola

//tela principal do admin-escola
Route::get('admin/projeto/home', 'Admin\Projeto\AdminProjetoController@index')->name('admin/projeto/home');

//tela de cadastro de escolas pelo admin
Route::get('admin/projeto/cadastro/registro', 'Admin\projeto\AdminProjetoController@paginaCadastrarProjeto')->name('admin/projeto/cadastro/registro');

//encaminha o post para EscolaController. Lá é feita a mágica de cadastrar no banco de dados.
Route::post('admin/projeto/cadastro/registro', 'Admin\projeto\AdminProjetoController@store')->name('admin/projeto/cadastro/registro');

//encaminha as informações do formulário de editar, para realizar o update
Route::post("/admin/projeto/{id}", 'Admin\projeto\AdminProjetoController@update');

//encaminha para a tela de listar escolas
Route::get('admin/projeto/busca/buscar', 'Admin\projeto\AdminProjetoController@buscar')->name("admin/projeto/busca/buscar");

//encaminha para o controller, aonde a escola é deletada
Route::get("admin/projeto/deletar/{id}/excluir", "Admin\projeto\AdminProjetoController@delete");

//encaminha pra tela do formulario de edição, com os dados antigos já carregados nos campos
Route::get("/admin/projeto/update/{id}/editar", "Admin\projeto\AdminProjetoController@editar");