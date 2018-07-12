<?php

Route::group(['prefix' => 'admin/config', 'namespace' => 'Admin\Configuracoes'], function () {

    Route::get('inscricoes', ['as' => 'admin.config.inscricoes', 'uses' => 'AdminConfigInscricoesController@index']);

    Route::get('avaliacoes', ['as' => 'admin.config.avaliacoes', 'uses' => 'AdminConfigAvaliacoesController@index']);

    Route::post('inscricoes/store', ['as' => 'admin.config.inscricoes.store', 'uses' => 'AdminConfigInscricoesController@store']);

    Route::post('avaliacoes/store', ['as' => 'admin.config.avaliacoes.store', 'uses' => 'AdminConfigAvaliacoesController@store']);

    //Route::get('avaliacoes', ['as' => 'admin.config.inscricoes', 'uses' => 'AdminConfigController@avaliacoes']);


});
