<?php

//tela inicial do sistema
Route::get('/', function () {
    return view('welcome');
})->name('home-inicio');

require_once('auth/auth.php');

require_once('admin/admin.php');

require_once('escola/escola.php');

require_once('professor/professor.php');