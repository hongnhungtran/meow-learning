<?php 
Route::group(['prefix' => 'common-test'], function () {
	// Level list
	Route::get('/', [
		'as' => 'common-test-level', 
		'uses' => 'User\CommonTestController@get_level_list'
	]);

    //Lesson list
	Route::get('/level/{id}/', [
		'as' => 'common-test-list', 
		'uses' => 'User\CommonTestController@get_lesson_list'
	]);

    //Exercise
	Route::get('/lesson/{id}', [
		'as' => 'common-test-exercise', 
		'uses' => 'User\CommonTestController@get_exercise'
	]);
});