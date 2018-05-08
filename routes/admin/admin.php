<?php

//telas admin

//tela principal admin
Route::get('admin/home', 'Admin\HomeController@index')->name('admin/home');

Route::get('admin/escola/home', 'Admin\escola\EscolaController@escola')->name('admin/escola/home');

Route::get('admin/escola/cadastrar', 'Admin\escola\EscolaController@cadastraEscola')->name('admin/escola/cadastrar');

Route::get('admin/escola/cadastro/usuario', 'Admin\user\UserController@cadastraAluno')->name('admin/escola/cadastro/usuario');

Route::get('admin/escola/cadastra', 'Admin\escola\EscolaController@cadastra')->name('admin/escola/cadastra');

Route::post('admin/escola/salvar', 'Admin\escola\EscolaController@salvaAluno')->name('admin/escola/salvar');

Route::post('admin/escola/salvar', 'Admin\escola\EscolaController@salvar')->name('admin/escola/salvar');

Route::post('admin/user/salvar', 'Admin\user\UserController@salvar')->name('admin/user/salvar');



