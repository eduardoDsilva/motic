<?php

Route::group(['prefix' => 'professor/projeto', 'namespace' => 'Professor\Projeto'], function () {

    Route::get('/', ['as' => 'professor.projeto', 'uses' => 'ProfessorProjetoController@index']);

});