<?php 

Route::group(['prefix' => 'vocabulary'], function () {
    //Vocabulary management
	Route::get('/', [
		'as' => 'vocabularyManagement', 
		'uses' => 'Admin\ManagementController@vocabularyManagement'
	]);
	
    //Lesson
	Route::get('lesson', [
		'as' => 'lessonList', 
		'uses' => 'Admin\VocabularyController@lessonList'
	]);
 	Route::get('lesson/create', [
 		'as' => 'createLesson', 
 		'uses' => 'Admin\VocabularyController@createLesson'
 	]);
	Route::post('lesson/create', [
		'as' => 'storeLesson', 
		'uses' => 'Admin\VocabularyController@storeLesson'
	]);
	Route::get('lesson/{id}/edit', [
		'as' => 'editLesson', 
		'uses' => 'Admin\VocabularyController@editLesson'
	]);
	Route::post('lesson/{id}/edit', [
		'as' => 'editLesson', 
		'uses' => 'Admin\VocabularyController@updateLesson'
	]);
	Route::get('lesson/{id}', [
		'as' => 'showLesson', 
		'uses' => 'Admin\VocabularyController@showLesson'
	]);
	Route::post('lesson/search', [
		'as' => 'searchLesson', 
		'uses' => 'Admin\VocabularyController@searchLesson'
	]);


	//Exercise
	Route::get('exercise', [
		'as' => 'vocabulary.exercise.index', 
		'uses' => 'Admin\VocabularyExerciseController@index'
	]);

 	Route::get('exercise/create', [
 		'as' => 'vocabulary.exercise.create', 
 		'uses' => 'Admin\VocabularyExerciseController@create'
 	]);

	Route::post('exercise/create', [
		'as' => 'vocabulary.exercise.store', 
		'uses' => 'Admin\VocabularyExerciseController@store'
	]);

	Route::get('exercise/{id}/edit', [
		'as' => 'vocabulary.exercise.edit', 
		'uses' => 'Admin\VocabularyExerciseController@edit'
	]);

	Route::post('exercise/{id}/edit', [
		'as' => 'vocabulary.exercise.update', 
		'uses' => 'Admin\VocabularyExerciseController@update'
	]);

	Route::get('exercise/{id}', [
		'as' => 'showLesson', 
		'uses' => 'Admin\VocabularyExerciseController@show'
	]);




	//Vocabulary
	Route::get('word', [
		'as' => 'word.index', 
		'uses' => 'Admin\WordController@index'
	]);

 	Route::get('word/create', [
 		'as' => 'word.create', 
 		'uses' => 'Admin\WordController@create'
 	]);

	Route::post('word/create', [
		'as' => 'word.store', 
		'uses' => 'Admin\WordController@store'
	]);

	Route::get('word/{id}/edit', [
		'as' => 'word.edit', 
		'uses' => 'Admin\WordController@edit'
	]);

	Route::post('word/{id}/edit', [
		'as' => 'word.update', 
		'uses' => 'Admin\WordController@update'
	]);

	Route::get('word/{id}', [
		'as' => 'word.show', 
		'uses' => 'Admin\WordController@show'
	]);
});
