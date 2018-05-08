<?php

//tela inicial do sistema
Route::get('/', function () {
    return view('welcome');
});

require_once ('auth/auth.php');

require_once ('admin/admin.php');



