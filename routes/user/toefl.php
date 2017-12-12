<?php 
Route::group(['prefix' => 'toefl'], function () {
	Route::get('/', [
		'as' => 'toefl-level', 
		'uses' => 'User\ToeflController@get_level_list'
	]);

	Route::get('/level/{id}/', [
		'as' => 'toefl-list', 
		'uses' => 'User\ToeflController@get_lesson_list'
	]);

    //Exercise
	Route::get('/lesson/{id}', [
		'as' => 'toefl-exercise', 
		'uses' => 'User\ToeflController@get_exercise'
	]);
});