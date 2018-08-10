<?php

Route::group(['prefix' => 'admin/user', 'namespace' => 'Admin\Usuario'], function () {

    Route::get('/', ['as' => 'admin.user', 'uses' => 'AdminUserController@index']);

    Route::get('show/{id}', ['as' => 'admin.user.show', 'uses' => 'AdminUserController@show']);

    Route::get('reset-senha/{id}', ['as' => 'admin.user.mudar-senha', 'uses' => 'AdminUserController@resetSenha']);

    Route::get('destroy/{id}', ['as' => 'admin.user.destroy', 'uses' => 'AdminUserController@destroy']);

    Route::get('edit/{id}', ['as' => 'admin.user.edit', 'uses' => 'AdminUserController@edit']);

    Route::get('create', ['as' => 'admin.user.create', 'uses' => 'AdminUserController@create']);

    Route::post('update/{id}', ['as' => 'admin.user.update', 'uses' => 'AdminUserController@update']);

    Route::post('filtrar', ['as' => 'admin.user.filtrar', 'uses' => 'AdminUserController@filtrar']);

    Route::post('store', ['as' => 'admin.user.store', 'uses' => 'AdminUserController@store']);

});