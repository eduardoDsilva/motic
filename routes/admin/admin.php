<?php

//telas admin

//tela principal admin
Route::get('admin/home', 'Admin\AdminController@index')->name('admin/home');

require_once ('escola/escola.php');

require_once ('avaliador/avaliador.php');

require_once ('projeto/projeto.php');

require_once ('disciplinas/disciplinas.php');

