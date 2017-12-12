<?php 
Route::group(['prefix' => 'speaking'], function () {
	Route::get('/', [
		'as' => 'speaking-level', 
		'uses' => 'User\SpeakingController@get_level_list'
	]);

	Route::get('/level/{id}/', [
		'as' => 'speaking-list', 
		'uses' => 'User\SpeakingController@get_lesson_list'
	]);

    //Exercise
	Route::get('/lesson/{id}', [
		'as' => 'speaking-exercise', 
		'uses' => 'User\SpeakingController@get_exercise'
	]);
});