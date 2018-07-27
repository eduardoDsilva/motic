<?php

Route::group(['prefix' => 'escola/config', 'namespace' => 'Escola\Configuracoes'], function () {

    Route::get('alterar-senha', ['as' => 'escola.config.alterar-senha', 'uses' => 'EscolaConfigController@alterarSenha']);

    Route::post('altera-senha', ['as' => 'escola.config.altera-senha', 'uses' => 'EscolaConfigController@alteraSenha']);

});