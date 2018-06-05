<?php

    //home
Route::get('admin/escola/home', 'Admin\Escola\AdminEscolaController@index')->name('admin/escola/home');
    //update
Route::post("admin/escola/{id}", 'Admin\Escola\AdminEscolaController@update');
    //pesquisar
Route::post("admin/escola/show", 'Admin\Escola\AdminEscolaController@show');
    //deletar
Route::get("admin/escola/destroy/{id}", "Admin\Escola\AdminEscolaController@destroy");
    //formulario de edita
Route::get("admin/escola/update/{id}/edita", "Admin\Escola\AdminEscolaController@edit");
    //formulario de registrar
Route::get('admin/escola/cadastro/registro', 'Admin\Escola\AdminEscolaController@create')->name('admin/escola/cadastro/registro');
    //create
Route::post('admin/escola/cadastro/registro', 'Admin\Escola\AdminEscolaController@store')->name('admin/escola/cadastro/registro');
