<?php 
Route::group(['prefix' => 'listening'], function () {
	//Management
	Route::get('/', ['as' => 'listening-management', 'uses' => 'Admin\ManagementController@listeningManagement']);
	
	//Lesson
	Route::get('/lesson', ['as' => 'listening-lesson-list', 'uses' => 'Admin\ListeningLessonController@index']);
	Route::get('/lesson/create', ['as' => 'listening-lesson-create', 'uses' => 'Admin\ListeningLessonController@create']);
	Route::post('/lesson/create', ['as' => 'listening-lesson-store', 'uses' => 'Admin\ListeningLessonController@store']);
	Route::get('/lesson/{id}/edit', ['as' => 'listening-lesson-edit', 'uses' => 'Admin\ListeningLessonController@edit']);
	Route::post('/lesson/{id}/edit', ['as' => 'listening-lesson-update', 'uses' => 'Admin\ListeningLessonController@update']);

	//Exercise
	Route::get('/exercise', ['as' => 'listening.exercise.index', 'uses' => 'Admin\ListeningExerciseController@index']);
 	Route::get('/exercise/create', ['as' => 'listening.exercise.create', 'uses' => 'Admin\ListeningExerciseController@create']);
	Route::post('/exercise/create', ['as' => 'listening.exercise.store', 'uses' => 'Admin\ListeningExerciseController@store']);
	Route::get('/exercise/{id}/edit', ['as' => 'listening.exercise.edit', 'uses' => 'Admin\ListeningExerciseController@edit']);
	Route::post('/exercise/{id}/edit', ['as' => 'listening.exercise.update', 'uses' => 'Admin\ListeningExerciseController@update']);
	Route::get('/exercise/{id}', ['as' => 'listening.exercise.show', 'uses' => 'Admin\ListeningExerciseController@show']);
});
