<?php 
Route::group(['prefix' => 'listening'], function () {
	Route::get('/', [
		'as' => 'listening-level', 
		'uses' => 'User\ListeningController@get_level_list'
	]);

	Route::get('/level/{id}/', [
		'as' => 'listening-list', 
		'uses' => 'User\ListeningController@get_lesson_list'
	]);

    //Exercise
	Route::get('/lesson/{id}', [
		'as' => 'listening-exercise', 
		'uses' => 'User\ListeningController@get_exercise'
	]);
});