<?php 
Route::group(['prefix' => 'reading'], function () {
	Route::get('/', ['as' => 'reading-lesson-list', 'uses' => 'Admin\ReadingController@index']);
	Route::get('create', ['as' => 'reading-lesson-create', 'uses' => 'Admin\ReadingController@create']);
	Route::post('create', ['as' => 'reading-lesson-store', 'uses' => 'Admin\ReadingController@store']);
	Route::get('{id}/edit', ['as' => 'reading-lesson-edit', 'uses' => 'Admin\ReadingController@edit']);
	Route::post('{id}/edit', ['as' => 'reading-lesson-update', 'uses' => 'Admin\ReadingController@update']);
});