<?php 

Route::group(['prefix' => 'writing'], function () {
	//Management
	Route::get('/', [
		'as' => 'writing-management', 
		'uses' => 'Admin\ManagementController@writing_management'
	]);
	
	//Lesson
	Route::get('/lesson', [
		'as' => 'writing-lesson-list', 
		'uses' => 'Admin\WritingLessonController@index'
	]);

	Route::get('/lesson/create', [
		'as' => 'writing-lesson-create', 
		'uses' => 'Admin\WritingLessonController@create'
	]);

	Route::post('/lesson/create', [
		'as' => 'writing-lesson-store', 
		'uses' => 'Admin\WritingLessonController@store'
	]);

	Route::get('/lesson/{id}/edit', [
		'as' => 'writing-lesson-edit', 
		'uses' => 'Admin\WritingLessonController@edit'
	]);

	Route::post('/lesson/{id}/edit', [
		'as' => 'writing-lesson-update', 
		'uses' => 'Admin\WritingLessonController@update'
	]);

	//Exercise
	Route::get('/exercise', [
		'as' => 'writing.exercise.index', 
		'uses' => 'Admin\WritingExerciseController@index'
	]);

 	Route::get('/exercise/create', [
 		'as' => 'writing.exercise.create', 
 		'uses' => 'Admin\WritingExerciseController@create'
 	]);

	Route::post('/exercise/create', [
		'as' => 'writing.exercise.store', 
		'uses' => 'Admin\WritingExerciseController@store'
	]);

	Route::get('/exercise/{id}/edit', [
		'as' => 'writing.exercise.edit', 
		'uses' => 'Admin\WritingExerciseController@edit'
	]);

	Route::post('/exercise/{id}/edit', [
		'as' => 'writing.exercise.update', 
		'uses' => 'Admin\WritingExerciseController@update'
	]);

	Route::get('/exercise/{id}', [
		'as' => 'writing.exercise.show', 
		'uses' => 'Admin\WritingExerciseController@show'
	]);
});
