<?php

Route::prefix('escola/suplente')->group(function () {

//home
    Route::get('/home', 'Escola\Suplente\EscolaSuplenteController@index')->name('escola/suplente/home');
//update
    Route::post("/{id}", 'Escola\Suplente\EscolaSuplenteController@update');
//exibir projeto
    Route::get('/show/{id}/suplente', 'Escola\Suplente\EscolaSuplenteController@showSuplente');
//exibir projeto
    Route::get('/show/{id}', 'Escola\Suplente\EscolaSuplenteController@show');
//deletar
    Route::get("/destroy/{id}/{projeto}", "Escola\Suplente\EscolaSuplenteController@destroy");
//formulario de edita
    Route::get("/update/{id}/edita", "Escola\Suplente\EscolaSuplenteController@edit");
//formulario de registrar
    Route::get('/cadastro/registro', 'Escola\Suplente\EscolaSuplenteController@create')->name('escola/suplente/cadastro/registro');
//create
    Route::post('/cadastro/registro', 'Escola\Suplente\EscolaSuplenteController@store')->name('escola/suplente/cadastro/registro');
});