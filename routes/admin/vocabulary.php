<?php 

Route::group(['prefix' => 'vocabulary'], function () {
    //Vocabulary management
	Route::get('/', ['as' => 'vocabulary-management', 'uses' => 'Admin\VocabularyController@vocabulary_management']);

	//Topic
    Route::group(['prefix' => 'topic'], function () {
		Route::get('/', ['as' => 'vocabulary-topic-list', 'uses' => 'Admin\VocabularyController@vocabulary_topic_index']);
		Route::get('/create', ['as' => 'vocabulary-topic-create', 'uses' => 'Admin\VocabularyController@vocabulary_topic_create']);
		Route::post('/create', ['as' => 'vocabulary-topic-store', 'uses' => 'Admin\VocabularyController@vocabulary_topic_store']);
		Route::get('/{id}/edit', ['as' => 'vocabulary-topic-edit', 'uses' => 'Admin\VocabularyController@vocabulary_topic_edit']);
		Route::post('/{id}/edit', ['as' => 'vocabulary-topic-update', 'uses' => 'Admin\VocabularyController@vocabulary_topic_update']);
		Route::get('/{id}', ['as' => 'vocabulary-topic-show', 'uses' => 'Admin\VocabularyController@vocabulary_topic_show']);
	});
    
    //Lesson
    Route::group(['prefix' => 'lesson'], function () {
    	//lesson
    	Route::get('/', ['as' => 'vocabulary-lesson-list', 'uses' => 'Admin\VocabularyController@vocabulary_lesson_index']);
		Route::get('create', ['as' => 'vocabulary-lesson-create', 'uses' => 'Admin\VocabularyController@vocabulary_lesson_create']);
		Route::post('create', ['as' => 'vocabulary-lesson-store', 'uses' => 'Admin\VocabularyController@vocabulary_lesson_store']);
		Route::get('{id}/edit', ['as' => 'vocabulary-lesson-edit', 'uses' => 'Admin\VocabularyController@vocabulary_lesson_edit']);
		Route::post('{id}/edit', ['as' => 'vocabulary-lesson-update', 'uses' => 'Admin\VocabularyController@vocabulary_lesson_update']);
		

		//exercise
		Route::get('/{id}', ['as' => 'vocabulary-exercise-index', 'uses' => 'Admin\VocabularyController@vocabulary_exercise_index']);
		Route::get('/{id}/vocabulary/create', ['as' => 'vocabulary-exercise-create', 'uses' => 'Admin\VocabularyController@vocabulary_exercise_create']);
		Route::post('/{id}/vocabulary/create', ['as' => 'vocabulary-exercise-store', 'uses' => 'Admin\VocabularyController@vocabulary_exercise_store']);
	});

    //Excercise
});
