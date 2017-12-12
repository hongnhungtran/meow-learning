<?php 

Route::group(['prefix' => 'toeic'], function () {
	//Management
	Route::get('/', [
		'as' => 'toeic-management', 
		'uses' => 'Admin\ManagementController@toeic_management'
	]);
	
	//Lesson
	Route::get('/lesson', [
		'as' => 'toeic-lesson-list', 
		'uses' => 'Admin\ToeicLessonController@index'
	]);

	Route::get('/lesson/create', [
		'as' => 'toeic-lesson-create', 
		'uses' => 'Admin\ToeicLessonController@create'
	]);

	Route::post('/lesson/create', [
		'as' => 'toeic-lesson-store', 
		'uses' => 'Admin\ToeicLessonController@store'
	]);

	Route::get('/lesson/{id}/edit', [
		'as' => 'toeic-lesson-edit', 
		'uses' => 'Admin\ToeicLessonController@edit'
	]);

	Route::post('/lesson/{id}/edit', [
		'as' => 'toeic-lesson-update', 
		'uses' => 'Admin\ToeicLessonController@update'
	]);

	//Exercise
	Route::get('/exercise', [
		'as' => 'toeic.exercise.index', 
		'uses' => 'Admin\ToeicExerciseController@index'
	]);

 	Route::get('/exercise/create', [
 		'as' => 'toeic.exercise.create', 
 		'uses' => 'Admin\ToeicExerciseController@create'
 	]);

	Route::post('/exercise/create', [
		'as' => 'toeic.exercise.store', 
		'uses' => 'Admin\ToeicExerciseController@store'
	]);

	Route::get('/exercise/{id}/edit', [
		'as' => 'toeic.exercise.edit', 
		'uses' => 'Admin\ToeicExerciseController@edit'
	]);

	Route::post('/exercise/{id}/edit', [
		'as' => 'toeic.exercise.update', 
		'uses' => 'Admin\ToeicExerciseController@update'
	]);

	Route::get('/exercise/{id}', [
		'as' => 'toeic.exercise.show', 
		'uses' => 'Admin\ToeicExerciseController@show'
	]);
});
