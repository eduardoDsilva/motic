<?php

Route::group(['prefix' => 'admin/config', 'namespace' => 'Admin\Configuracoes'], function () {

    Route::get('inscricoes', ['as' => 'admin.config.inscricoes', 'uses' => 'AdminConfigInscricoesController@index']);

    Route::get('avaliacoes', ['as' => 'admin.config.avaliacoes', 'uses' => 'AdminConfigAvaliacoesController@index']);

    Route::get('pdf', ['as' => 'admin.config.pdf', 'uses' => 'AdminConfigPdfController@index']);

    Route::get('pdf/termos', ['as' => 'admin.config.termos', 'uses' => 'AdminConfigPdfController@termos']);

    Route::get('pdf/regras', ['as' => 'admin.config.regras', 'uses' => 'AdminConfigPdfController@regras']);

    Route::post('inscricoes/store', ['as' => 'admin.config.inscricoes.store', 'uses' => 'AdminConfigInscricoesController@store']);

    Route::post('avaliacoes/store', ['as' => 'admin.config.avaliacoes.store', 'uses' => 'AdminConfigAvaliacoesController@store']);

    Route::post('regras-de-autorizacao/carrega', ['as' => 'admin.config.regras_de_autorizacao', 'uses' => 'AdminConfigPdfController@carregaRegrasDeAutorizacao']);

    Route::post('regulamento/carrega', ['as' => 'admin.config.regulamento', 'uses' => 'AdminConfigPdfController@carregaRegulamento']);

    Route::post('termo-de-autorizacao-menor/carrega', ['as' => 'admin.config.termo-menor', 'uses' => 'AdminConfigPdfController@carregaTermoMenor']);

    Route::post('termo-de-autorizacao-maior/carrega', ['as' => 'admin.config.termo-maior', 'uses' => 'AdminConfigPdfController@carregaTermoMaior']);

    Route::post('contrato-de-convivencia/carrega', ['as' => 'admin.config.contrato-convivencia', 'uses' => 'AdminConfigPdfController@carregaContratoConvivencia']);

    Route::post('ficha-de-avaliacao/carrega', ['as' => 'admin.config.ficha-de-avaliacao', 'uses' => 'AdminConfigPdfController@carregaFichaDeAvaliacao']);


});
