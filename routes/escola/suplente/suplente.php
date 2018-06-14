<?php

//home
Route::get('escola/suplente/home', 'Escola\Suplente\EscolaSuplenteController@index')->name('escola/suplente/home');
//update
Route::post("escola/suplente/{id}", 'Escola\Suplente\EscolaSuplenteController@update');
//exibir projeto
Route::get('escola/suplente/show/{id}/suplente', 'Escola\Suplente\EscolaSuplenteController@showSuplente');
//exibir projeto
Route::get('escola/suplente/show/{id}', 'Escola\Suplente\EscolaSuplenteController@show');
//deletar
Route::get("escola/suplente/destroy/{id}/{projeto}", "Escola\Suplente\EscolaSuplenteController@destroy");
//formulario de edita
Route::get("escola/suplente/update/{id}/edita", "Escola\Suplente\EscolaSuplenteController@edit");
//formulario de registrar
Route::get('escola/suplente/cadastro/registro', 'Escola\Suplente\EscolaSuplenteController@create')->name('escola/suplente/cadastro/registro');
//create
Route::post('escola/suplente/cadastro/registro', 'Escola\Suplente\EscolaSuplenteController@store')->name('escola/suplente/cadastro/registro');