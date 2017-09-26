<?php 
Route::group(['prefix' => 'writing'], function () {
	Route::get('/', ['as' => 'writing-lesson-list', 'uses' => 'Admin\WritingController@index']);
	Route::get('create', ['as' => 'writing-lesson-create', 'uses' => 'Admin\WritingController@create']);
	Route::post('create', ['as' => 'writing-lesson-store', 'uses' => 'Admin\WritingController@store']);
	Route::get('{id}/edit', ['as' => 'writing-lesson-edit', 'uses' => 'Admin\WritingController@edit']);
	Route::post('{id}/edit', ['as' => 'writing-lesson-update', 'uses' => 'Admin\WritingController@update']);
});