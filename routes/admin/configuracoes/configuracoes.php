<?php

Route::group(['prefix' => 'admin/config', 'namespace' => 'Admin\Configuracoes'], function () {

    Route::get('inscricoes', ['as' => 'admin.config.inscricoes', 'uses' => 'AdminConfigInscricoesController@index']);

    Route::get('avaliacoes', ['as' => 'admin.config.avaliacoes', 'uses' => 'AdminConfigAvaliacoesController@index']);

    Route::get('pdf', ['as' => 'admin.config.pdf', 'uses' => 'AdminPdfAvaliacoesController@index']);

    Route::get('pdf/termos', ['as' => 'admin.config.termos', 'uses' => 'AdminPdfAvaliacoesController@termos']);

    Route::get('pdf/regras', ['as' => 'admin.config.regras', 'uses' => 'AdminPdfAvaliacoesController@regras']);

    Route::post('inscricoes/store', ['as' => 'admin.config.inscricoes.store', 'uses' => 'AdminConfigInscricoesController@store']);

    Route::post('avaliacoes/store', ['as' => 'admin.config.avaliacoes.store', 'uses' => 'AdminConfigAvaliacoesController@store']);


});
