<?php

//telas escola

//tela principal do admin-escola
Route::get('admin/disciplinas/home', 'Admin\Disciplinas\AdminDisciplinaController@index')->name('admin/disciplinas/home');

//encaminha o post para DisciplinaController. Lá é feita a mágica de cadastrar no banco de dados.
Route::post('admin/disciplinas/cadastro/registro', 'Admin\Disciplinas\AdminDisciplinaController@store')->name('admin/disciplinas/cadastro/registro');

//encaminha as informações do formulário de editar, para realizar o update
Route::post("/admin/disciplinas/{id}", 'Admin\Disciplinas\AdminDisciplinaController@update');

//encaminha para a tela de listar disciplinas
Route::get('admin/disciplinas/busca/buscar', 'Admin\Disciplinas\AdminDisciplinaController@buscar')->name("admin/disciplinas/busca/buscar");

//encaminha para o controller, aonde a disciplina é deletada
Route::get("admin/disciplinas/deletar/{id}/excluir", "Admin\Disciplinas\AdminDisciplinaController@delete");

//encaminha pra tela do formulario de edição, com os dados antigos já carregados nos campos
Route::get("/admin/disciplinas/update/{id}/editar", "Admin\Disciplinas\AdminDisciplinaController@editar");