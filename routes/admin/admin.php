<?php

//telas admin

//tela principal admin
Route::get('admin/home', 'Admin\AdminController@index')->name('admin/home');

//tela principal do admin-escola
Route::get('admin/escola/home', 'Admin\Escola\AdminEscolaController@index')->name('admin/escola/home');

//tela de cadastro de escolas pelo admin
Route::get('admin/escola/cadastro/registro', 'Admin\Escola\AdminEscolaController@paginaCadastrarEscola')->name('admin/escola/cadastro/registro');
//encaminha o post para AdminEscolaController. Lá é feita a mágica de cadastrar no banco de dados.
Route::post('admin/escola/cadastro/registro', 'Admin\Escola\AdminEscolaController@salvarUsuario')->name('admin/escola/cadastro/registro');

Route::get('admin/escola/cadastra', 'Admin\Escola\AdminEscolaController@cadastra')->name('admin/escola/cadastra');

Route::post('admin/escola/salvar', 'AdminEscola\AdminEscolaController@salvaAluno')->name('admin/escola/salvar');

Route::post('admin/escola/salvar', 'AdminEscola\AdminEscolaController@salvar')->name('admin/escola/salvar');

Route::get('admin/escola/cadastro/usuario', 'Admin\Escola\UserController@cadastraAluno')->name('admin/escola/cadastro/usuario');

Route::post('admin/user/salvar', 'Admin\Escola\UserController@salvar')->name('admin/user/salvar');



