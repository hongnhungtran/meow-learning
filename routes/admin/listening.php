<?php 
Route::group(['prefix' => 'listening'], function () {
	Route::get('/', ['as' => 'listening-lesson-list', 'uses' => 'Admin\ListeningController@index']);
	Route::get('create', ['as' => 'listening-lesson-create', 'uses' => 'Admin\ListeningController@create']);
	Route::post('create', ['as' => 'listening-lesson-store', 'uses' => 'Admin\ListeningController@store']);
	Route::get('/{id}/edit', ['as' => 'listening-lesson-edit', 'uses' => 'Admin\ListeningController@edit']);
	Route::post('/{id}/edit', ['as' => 'listening-lesson-update', 'uses' => 'Admin\ListeningController@update']);
});
