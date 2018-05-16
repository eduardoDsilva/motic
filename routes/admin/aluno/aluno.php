<?php

//telas aluno

//tela principal do admin-aluno
Route::get('admin/aluno/home', 'Admin\aluno\AdminAlunoController@index')->name('admin/aluno/home');

//realiza o update com os dados vindos da tela de edicao
Route::post("/admin/aluno/{id}", 'Admin\aluno\AdminAlunoController@update');

//deleta um avaliador do banco
Route::get("admin/aluno/deletar/{id}/excluir", "Admin\aluno\AdminAlunoController@delete");

//encaminha para a tela de edição, com os dados ja carregados nos campos
Route::get("/admin/aluno/update/{id}/editar", "Admin\aluno\AdminAlunoController@editar");

//tela de cadastro de alunos pelo admin
Route::get('admin/aluno/cadastro/registro', 'Admin\aluno\AdminAlunoController@paginaCadastrarAluno')->name('admin/aluno/cadastro/registro');

//encaminha o post para AdminAlunoController. Lá é feita a mágica de cadastrar no banco de dados.
Route::post('admin/aluno/cadastro/registro', 'admin\aluno\AdminAlunoController@store')->name('admin/aluno/cadastro/registro');

//encaminha para a tela de listar alunos
Route::get('admin/aluno/busca/buscar', 'Admin\aluno\AdminAlunoController@buscar')->name("admin/aluno/busca/buscar");