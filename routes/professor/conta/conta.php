<?php

Route::group(['prefix' => 'professor/conta', 'namespace' => 'Professor\Conta'], function () {

    Route::get('alterar-senha', ['as' => 'admin.config.alterar-senha', 'uses' => 'ProfessorContaController@alterarSenha']);

    Route::post('altera-senha', ['as' => 'admin.config.altera-senha', 'uses' => 'ProfessorContaController@alteraSenha']);

});