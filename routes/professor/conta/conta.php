<?php

Route::group(['prefix' => 'professor/conta', 'namespace' => 'Professor\Conta'], function () {

    Route::get('/', ['as' => 'professor.conta', 'uses' => 'ProfessorContaController@index']);

});