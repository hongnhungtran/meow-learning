<?php 
Route::group(['prefix' => 'speaking'], function () {
	Route::get('/', ['as' => 'speaking-lesson-list', 'uses' => 'Admin\SpeakingController@index']);
	Route::get('create', ['as' => 'speaking-lesson-create', 'uses' => 'Admin\SpeakingController@create']);
	Route::post('create', ['as' => 'speaking-lesson-store', 'uses' => 'Admin\SpeakingController@store']);
	Route::get('{id}/edit', ['as' => 'speaking-lesson-edit', 'uses' => 'Admin\SpeakingController@edit']);
	Route::post('{id}/edit', ['as' => 'speaking-lesson-update', 'uses' => 'Admin\SpeakingController@update']);
});