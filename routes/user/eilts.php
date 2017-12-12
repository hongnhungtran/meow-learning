<?php 
Route::group(['prefix' => 'eilts'], function () {
	Route::get('/', [
		'as' => 'eilts-level', 
		'uses' => 'User\EiltsController@get_level_list'
	]);

	Route::get('/level/{id}/', [
		'as' => 'eilts-list', 
		'uses' => 'User\EiltsController@get_lesson_list'
	]);

    //Exercise
	Route::get('/lesson/{id}', [
		'as' => 'eilts-exercise', 
		'uses' => 'User\EiltsController@get_exercise'
	]);
});