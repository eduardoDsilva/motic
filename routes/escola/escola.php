<?php

Route::get('escola/home', 'Escola\EscolaController@index')->name('escola/home');

require_once ('aluno/aluno.php');

require_once ('professor/professor.php');

require_once ('projeto/projeto.php');

require_once ('suplente/suplente.php');