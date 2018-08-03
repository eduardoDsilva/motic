<?php
Route::group(['prefix' => 'admin/categoria', 'namespace' => 'Admin\Categoria'], function () {

    Route::get('/', ['as' => 'admin.categoria', 'uses' => 'AdminCategoriaController@index']);

    Route::post('/store', ['as' => 'admin.categoria.store', 'uses' => 'AdminCategoriaController@store']);

    Route::get('/edit/{id}', ['as' => 'admin.categoria.edit', 'uses' => 'AdminCategoriaController@edit']);

    Route::post('/update/{id}', ['as' => 'admin.categoria.update', 'uses' => 'AdminCategoriaController@update']);

});