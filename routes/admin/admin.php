<?php

//telas admin

//tela principal admin
Route::get('admin/home', 'Admin\AdminController@index');

//tela principal do admin-escola
Route::get('admin/escola/home', 'Admin\Escola\EscolaController@index')->name('admin/escola/home');

//tela de cadastro de escolas pelo admin
Route::get('admin/escola/cadastro/registro', 'Admin\Escola\EscolaController@paginaCadastrarEscola')->name('admin/escola/cadastro/registro');

//encaminha o post para AdminEscolaController. Lá é feita a mágica de cadastrar no banco de dados.
Route::post('admin/escola/cadastro/registro', 'Admin\Escola\EscolaController@store')->name('admin/escola/cadastro/registro');

Route::get('admin/escola/cadastra', 'Admin\Escola\AdminEscolaController@cadastra');

Route::post('admin/escola/salvar', 'AdminEscola\AdminEscolaController@salvaAluno');

Route::post('admin/escola/salvar', 'AdminEscola\AdminEscolaController@salvar');

Route::get('admin/escola/cadastro/usuario', 'Admin\Escola\UserController@cadastraAluno');

Route::post('admin/user/salvar', 'Admin\Escola\UserController@salvar');

