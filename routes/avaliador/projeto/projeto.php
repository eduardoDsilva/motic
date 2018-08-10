<?php

Route::group(['prefix' => 'avaliador/projeto', 'namespace' => 'Avaliador\Projeto'], function () {

    Route::get('/projeto', ['as' => 'avaliador.projeto', 'uses' => 'AvaliadorProjetoController@index']);

    Route::get('/projeto/avaliar/{id}', ['as' => 'avaliador.projeto.avaliar', 'uses' => 'AvaliadorProjetoController@avaliar']);


});