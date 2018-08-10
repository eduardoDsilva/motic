<?php

Route::group(['prefix' => 'professor/conta', 'namespace' => 'Professor\Conta'], function () {

    Route::get('alterar-senha', ['as' => 'professor.config.alterar-senha', 'uses' => 'ProfessorContaController@alterarSenha']);

    Route::post('altera-senha', ['as' => 'professor.config.altera-senha', 'uses' => 'ProfessorContaController@alteraSenha']);

});