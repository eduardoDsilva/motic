<?php

//telas professor

//tela principal do admin-professor
Route::get('admin/professor/home', 'Admin\professor\AdminProfessorController@index')->name('admin/professor/home');

//realiza o update com os dados vindos da tela de edicao
Route::post("/admin/professor/{id}", 'Admin\professor\AdminProfessorController@update');

//deleta um avaliador do banco
Route::get("admin/professor/deletar/{id}/excluir", "Admin\professor\AdminProfessorController@delete");

//encaminha para a tela de edição, com os dados ja carregados nos campos
Route::get("/admin/professor/update/{id}/editar", "Admin\professor\AdminProfessorController@editar");

//tela de cadastro de professors pelo admin
Route::get('admin/professor/cadastro/registro', 'Admin\professor\AdminProfessorController@paginaCadastrarprofessor')->name('admin/professor/cadastro/registro');

//encaminha o post para AdminProfessorController. Lá é feita a mágica de cadastrar no banco de dados.
Route::post('admin/professor/cadastro/registro', 'admin\professor\AdminProfessorController@store')->name('admin/professor/cadastro/registro');

//encaminha para a tela de listar professors
Route::get('admin/professor/busca/buscar', 'Admin\professor\AdminProfessorController@buscar')->name("admin/professor/busca/buscar");