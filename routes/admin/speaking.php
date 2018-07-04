<?php 
Route::group(['prefix' => 'speaking'], function () {
	//Management
	Route::get('/', ['as' => 'speaking-management', 'uses' => 'Admin\ManagementController@speakingManagement']);
	
	//Lesson
	Route::get('/lesson', ['as' => 'speaking-lesson-list', 'uses' => 'Admin\SpeakingLessonController@index']);
	Route::get('/lesson/create', ['as' => 'speaking-lesson-create', 'uses' => 'Admin\SpeakingLessonController@create']);
	Route::post('/lesson/create', ['as' => 'speaking-lesson-store', 'uses' => 'Admin\SpeakingLessonController@store']);
	Route::get('/lesson/{id}/edit', ['as' => 'speaking-lesson-edit', 'uses' => 'Admin\SpeakingLessonController@edit']);
	Route::post('/lesson/{id}/edit', ['as' => 'speaking-lesson-update', 'uses' => 'Admin\SpeakingLessonController@update']);

	//Exercise
	Route::get('/exercise', ['as' => 'speaking.exercise.index', 'uses' => 'Admin\SpeakingExerciseController@index']);
 	Route::get('/exercise/create', ['as' => 'speaking.exercise.create', 'uses' => 'Admin\SpeakingExerciseController@create']);
	Route::post('/exercise/create', ['as' => 'speaking.exercise.store', 'uses' => 'Admin\SpeakingExerciseController@store']);
	Route::get('/exercise/{id}/edit', ['as' => 'speaking.exercise.edit', 'uses' => 'Admin\SpeakingExerciseController@edit']);
	Route::post('/exercise/{id}/edit', ['as' => 'speaking.exercise.update', 'uses' => 'Admin\SpeakingExerciseController@update']);
	Route::get('/exercise/{id}', ['as' => 'speaking.exercise.show', 'uses' => 'Admin\SpeakingExerciseController@show']);
});