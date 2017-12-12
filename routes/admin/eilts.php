<?php 

Route::group(['prefix' => 'eilts'], function () {
	//Management
	Route::get('/', [
		'as' => 'eilts-management', 
		'uses' => 'Admin\ManagementController@eilts_management'
	]);
	
	//Lesson
	Route::get('/lesson', [
		'as' => 'eilts-lesson-list', 
		'uses' => 'Admin\EiltsLessonController@index'
	]);

	Route::get('/lesson/create', [
		'as' => 'eilts-lesson-create', 
		'uses' => 'Admin\EiltsLessonController@create'
	]);

	Route::post('/lesson/create', [
		'as' => 'eilts-lesson-store', 
		'uses' => 'Admin\EiltsLessonController@store'
	]);

	Route::get('/lesson/{id}/edit', [
		'as' => 'eilts-lesson-edit', 
		'uses' => 'Admin\EiltsLessonController@edit'
	]);

	Route::post('/lesson/{id}/edit', [
		'as' => 'eilts-lesson-update', 
		'uses' => 'Admin\EiltsLessonController@update'
	]);

	//Exercise
	Route::get('/exercise', [
		'as' => 'eilts.exercise.index', 
		'uses' => 'Admin\EiltsExerciseController@index'
	]);

 	Route::get('/exercise/create', [
 		'as' => 'eilts.exercise.create', 
 		'uses' => 'Admin\EiltsExerciseController@create'
 	]);

	Route::post('/exercise/create', [
		'as' => 'eilts.exercise.store', 
		'uses' => 'Admin\EiltsExerciseController@store'
	]);

	Route::get('/exercise/{id}/edit', [
		'as' => 'eilts.exercise.edit', 
		'uses' => 'Admin\EiltsExerciseController@edit'
	]);

	Route::post('/exercise/{id}/edit', [
		'as' => 'eilts.exercise.update', 
		'uses' => 'Admin\EiltsExerciseController@update'
	]);

	Route::get('/exercise/{id}', [
		'as' => 'eilts.exercise.show', 
		'uses' => 'Admin\EiltsExerciseController@show'
	]);
});
