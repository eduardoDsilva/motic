<?php

Route::group(['prefix' => 'escola/documentos', 'namespace' => 'Escola\Documentos'], function () {

    Route::get('documentos', ['as' => 'escola.documentos', 'uses' => 'EscolaDocumentosController@index']);

});