<?php

//telas escola

//tela principal do admin-escola
Route::get('admin/escola/home', 'Admin\Escola\AdminEscolaController@index')->name('admin/escola/home');

//tela de cadastro de escolas pelo admin
Route::get('admin/escola/cadastro/registro', 'Admin\Escola\AdminEscolaController@paginaCadastrarEscola')->name('admin/escola/cadastro/registro');

//encaminha o post para EscolaController. Lá é feita a mágica de cadastrar no banco de dados.
Route::post('admin/escola/cadastro/registro', 'Admin\Escola\AdminEscolaController@store')->name('admin/escola/cadastro/registro');

//encaminha as informações do formulário de editar, para realizar o update
Route::post("/admin/escola/{id}", 'Admin\Escola\AdminEscolaController@update');

//encaminha para a tela de listar escolas
Route::get('admin/escola/busca/buscar', 'Admin\Escola\AdminEscolaController@buscar')->name("admin/escola/busca/buscar");

//encaminha para o controller, aonde a escola é deletada
Route::get("admin/escola/deletar/{id}/excluir", "Admin\Escola\AdminEscolaController@delete");

//encaminha pra tela do formulario de edição, com os dados antigos já carregados nos campos
Route::get("/admin/escola/update/{id}/editar", "Admin\Escola\AdminEscolaController@editar");