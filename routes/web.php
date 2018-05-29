<?php

//tela inicial do sistema
Route::get('/', function () {
    return view('welcome');
})->name('home-inicio');

Route::get('/json-categorias','Admin\Projeto\AdminProjetoController@categorias');
Route::get('/json-aluno','Admin\Aluno\AdminAlunoController@escolaCategoria');
Route::get('/json-alunos','Admin\Projeto\AdminProjetoController@alunos');
Route::get('/json-professores','Admin\Projeto\AdminProjetoController@professores');

require_once('auth/auth.php');

require_once('admin/admin.php');

require_once('escola/escola.php');