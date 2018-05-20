<?php

    //home
Route::get('admin/escola/home', 'Admin\Escola\AdminEscolaController@index')->name('admin/escola/home');
    //update
Route::post("admin/escola/{id}", 'Admin\Escola\AdminEscolaController@update');
    //deletar
Route::get("admin/escola/deletar/{id}/excluir", "Admin\Escola\AdminEscolaController@destroy");
    //formulario de editar
Route::get("admin/escola/update/{id}/editar", "Admin\Escola\AdminEscolaController@edit");
    //formulario de registrar
Route::get('admin/escola/cadastro/registro', 'Admin\Escola\AdminEscolaController@create')->name('admin/escola/cadastro/registro');
    //create
Route::post('admin/escola/cadastro/registro', 'Admin\Escola\AdminEscolaController@store')->name('admin/escola/cadastro/registro');
    //exibir
Route::get('admin/escola/busca/buscar', 'Admin\Escola\AdminEscolaController@show')->name('admin/escola/busca/buscar');
