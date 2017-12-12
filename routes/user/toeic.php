<?php 
Route::group(['prefix' => 'toeic'], function () {
	Route::get('/', [
		'as' => 'toeic-level', 
		'uses' => 'User\ToeicController@get_level_list'
	]);

	Route::get('/level/{id}/', [
		'as' => 'toeic-list', 
		'uses' => 'User\ToeicController@get_lesson_list'
	]);

    //Exercise
	Route::get('/lesson/{id}', [
		'as' => 'toeic-exercise', 
		'uses' => 'User\ToeicController@get_exercise'
	]);
});