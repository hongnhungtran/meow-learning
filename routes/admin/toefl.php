<?php 

Route::group(['prefix' => 'toefl'], function () {
	//Management
	Route::get('/', [
		'as' => 'toefl-management', 
		'uses' => 'Admin\ManagementController@toeflManagement'
	]);
	
	//Lesson
	Route::get('/lesson', [
		'as' => 'toefl-lesson-list', 
		'uses' => 'Admin\ToeflLessonController@index'
	]);

	Route::get('/lesson/create', [
		'as' => 'toefl-lesson-create', 
		'uses' => 'Admin\ToeflLessonController@create'
	]);

	Route::post('/lesson/create', [
		'as' => 'toefl-lesson-store', 
		'uses' => 'Admin\ToeflLessonController@store'
	]);

	Route::get('/lesson/{id}/edit', [
		'as' => 'toefl-lesson-edit', 
		'uses' => 'Admin\ToeflLessonController@edit'
	]);

	Route::post('/lesson/{id}/edit', [
		'as' => 'toefl-lesson-update', 
		'uses' => 'Admin\ToeflLessonController@update'
	]);

	//Exercise
	Route::get('/exercise', [
		'as' => 'toefl.exercise.index', 
		'uses' => 'Admin\ToeflExerciseController@index'
	]);

 	Route::get('/exercise/create', [
 		'as' => 'toefl.exercise.create', 
 		'uses' => 'Admin\ToeflExerciseController@create'
 	]);

	Route::post('/exercise/create', [
		'as' => 'toefl.exercise.store', 
		'uses' => 'Admin\ToeflExerciseController@store'
	]);

	Route::get('/exercise/{id}/edit', [
		'as' => 'toefl.exercise.edit', 
		'uses' => 'Admin\ToeflExerciseController@edit'
	]);

	Route::post('/exercise/{id}/edit', [
		'as' => 'toefl.exercise.update', 
		'uses' => 'Admin\ToeflExerciseController@update'
	]);

	Route::get('/exercise/{id}', [
		'as' => 'toefl.exercise.show', 
		'uses' => 'Admin\ToeflExerciseController@show'
	]);
});
