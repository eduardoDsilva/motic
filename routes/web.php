<?php

Route::get('/', 'HomeController@index')->name('home');

Route::get('/regulamento', 'HomeController@regulamento')->name('regulamento');

Route::get('/contato', 'HomeController@contato')->name('contato');

Route::get('/sobre', 'HomeController@sobre')->name('sobre');

require_once('auth/auth.php');

require_once('admin/admin.php');

require_once('escola/escola.php');

require_once('professor/professor.php');

require_once('avaliador/avaliador.php');