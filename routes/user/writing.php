<?php 
Route::group(['prefix' => 'writing'], function () {
	Route::get('/', [
		'as' => 'writing-level', 
		'uses' => 'User\WritingController@get_level_list'
	]);

	Route::get('/level/{id}/', [
		'as' => 'writing-list', 
		'uses' => 'User\WritingController@get_lesson_list'
	]);

    //Exercise
	Route::get('/lesson/{id}', [
		'as' => 'writing-exercise', 
		'uses' => 'User\WritingController@get_exercise'
	]);
});