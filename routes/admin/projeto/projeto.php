<?php

//telas escola

//tela principal do admin-escola
Route::get('admin/projeto/home', 'Admin\Projeto\ProjetoController@index')->name('admin/projeto/home');

//tela de cadastro de escolas pelo admin
Route::get('admin/projeto/cadastro/registro', 'Admin\projeto\ProjetoController@paginaCadastrarEscola')->name('admin/projeto/cadastro/registro');

//encaminha o post para EscolaController. Lá é feita a mágica de cadastrar no banco de dados.
Route::post('admin/projeto/cadastro/registro', 'Admin\projeto\ProjetoController@store')->name('admin/projeto/cadastro/registro');

//encaminha as informações do formulário de editar, para realizar o update
Route::post("/admin/projeto/{id}", 'Admin\projeto\ProjetoController@update');

//encaminha para a tela de listar escolas
Route::get('admin/projeto/busca/buscar', 'Admin\projeto\ProjetoController@busca')->name("admin/projeto/busca/buscar");

//encaminha para o controller, aonde a escola é deletada
Route::get("admin/projeto/deletar/{id}/excluir", "Admin\projeto\ProjetoController@delete");

//encaminha pra tela do formulario de edição, com os dados antigos já carregados nos campos
Route::get("/admin/projeto/update/{id}/editar", "Admin\projeto\ProjetoController@editar");