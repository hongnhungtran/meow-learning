<?php 
Route::group(['prefix' => 'reading'], function () {
	Route::get('/', [
		'as' => 'reading-level', 
		'uses' => 'User\ReadingController@get_level_list'
	]);

	Route::get('/level/{id}/', [
		'as' => 'reading-list', 
		'uses' => 'User\ReadingController@get_lesson_list'
	]);

    //Exercise
	Route::get('/lesson/{id}', [
		'as' => 'reading-exercise', 
		'uses' => 'User\ReadingController@get_exercise'
	]);
});