<?php 

Route::group(['prefix' => 'vocabulary'], function () {
    //Vocabulary management
	Route::get('/', [
		'as' => 'vocabularyManagement', 
		'uses' => 'Admin\ManagementController@vocabularyManagement'
	]);
	//Topic
    Route::get('topic', [
    	'as' => 'topicList', 
    	'uses' => 'Admin\VocabularyController@topicList'
    ]);
	Route::get('topic/{id}/edit', [
		'as' => 'vocabulary.topic.edit', 
		'uses' => 'Admin\VocabularyController@edit'
	]);
	Route::post('topic/{id}/edit', [
		'as' => 'vocabulary.topic.update', 
		'uses' => 'Admin\VocabularyController@update'
	]);

	Route::get('topic/{id}', [
		'as' => 'vocabulary.topic.show', 
		'uses' => 'Admin\VocabularyController@show'
	]);

    //Lesson
	Route::get('lesson', [
		'as' => 'vocabulary.lesson.index', 
		'uses' => 'Admin\VocabularyLessonController@index'
	]);

 	Route::get('lesson/create', [
 		'as' => 'vocabulary.lesson.create', 
 		'uses' => 'Admin\VocabularyLessonController@create'
 	]);

	Route::post('lesson/create', [
		'as' => 'vocabulary.lesson.store', 
		'uses' => 'Admin\VocabularyLessonController@store'
	]);

	Route::get('lesson/{id}/edit', [
		'as' => 'vocabulary.lesson.edit', 
		'uses' => 'Admin\VocabularyLessonController@edit'
	]);

	Route::post('lesson/{id}/edit', [
		'as' => 'vocabulary.lesson.update', 
		'uses' => 'Admin\VocabularyLessonController@update'
	]);

	Route::get('lesson/{id}', [
		'as' => 'vocabulary.lesson.show', 
		'uses' => 'Admin\VocabularyLessonController@show'
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
		'as' => 'vocabulary.exercise.show', 
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
