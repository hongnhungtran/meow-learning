<?php 
Route::group(['prefix' => 'reading'], function () {
	//Management
	Route::get('/', ['as' => 'reading-management', 'uses' => 'Admin\ManagementController@reading_management']);
	
	//Lesson
	Route::get('/lesson', ['as' => 'reading-lesson-list', 'uses' => 'Admin\ReadingLessonController@index']);
	Route::get('/lesson/create', ['as' => 'reading-lesson-create', 'uses' => 'Admin\ReadingLessonController@create']);
	Route::post('/lesson/create', ['as' => 'reading-lesson-store', 'uses' => 'Admin\ReadingLessonController@store']);
	Route::get('/lesson/{id}/edit', ['as' => 'reading-lesson-edit', 'uses' => 'Admin\ReadingLessonController@edit']);
	Route::post('/lesson/{id}/edit', ['as' => 'reading-lesson-update', 'uses' => 'Admin\ReadingLessonController@update']);

	//Exercise
	Route::get('exercise', ['as' => 'reading.exercise.index', 'uses' => 'Admin\ReadingExerciseController@index']);
 	Route::get('exercise/create', ['as' => 'reading.exercise.create', 'uses' => 'Admin\ReadingExerciseController@create']);
	Route::post('exercise/create', ['as' => 'reading.exercise.store', 'uses' => 'Admin\ReadingExerciseController@store']);
	Route::get('exercise/{id}/edit', ['as' => 'reading.exercise.edit', 'uses' => 'Admin\ReadingExerciseController@edit']);
	Route::post('exercise/{id}/edit', ['as' => 'reading.exercise.update', 'uses' => 'Admin\ReadingExerciseController@update']);
	Route::get('exercise/{id}', ['as' => 'reading.exercise.show', 'uses' => 'Admin\ReadingExerciseController@show']);
});