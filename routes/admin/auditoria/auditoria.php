<?php

//telas aluno

//tela principal do admin-aluno
Route::get('admin/auditoria/home', 'Admin\Auditoria\AdminAuditoriaController@index')->name('admin/auditoria/home');

Route::post('admin/auditoria/filtrar', 'Admin\Auditoria\AdminAuditoriaController@filtrar')->name('admin/auditoria/filtrar');