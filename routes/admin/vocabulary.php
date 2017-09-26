<?php 

Route::group(['prefix' => 'vocabulary'], function () {
    //Vocabulary management
	Route::get('/', ['as' => 'vocabulary-management', 'uses' => 'Admin\VocabularyController@vocabulary_management']);

	//Topic
    Route::group(['prefix' => 'topic'], function () {
		Route::get('/', ['as' => 'vocabulary-topic-list', 'uses' => 'Admin\VocabularyController@vocabulary_topic_index']);
		Route::get('create', ['as' => 'vocabulary-topic-create', 'uses' => 'Admin\VocabularyController@vocabulary_topic_create']);
		Route::post('create', ['as' => 'vocabulary-topic-store', 'uses' => 'Admin\VocabularyController@vocabulary_topic_store']);
		Route::get('edit/{id}', ['as' => 'vocabulary-topic-edit', 'uses' => 'Admin\VocabularyController@vocabulary_topic_edit']);
		Route::post('edit/{id}', ['as' => 'vocabulary-topic-update', 'uses' => 'Admin\VocabularyController@vocabulary_topic_update']);
	});
    
    //Lesson
    Route::group(['prefix' => 'lesson'], function () {
    	Route::get('/', ['as' => 'vocabulary-lesson-list', 'uses' => 'Admin\VocabularyController@vocabulary_lesson_index']);
		Route::get('create', ['as' => 'vocabulary-lesson-create', 'uses' => 'Admin\VocabularyController@vocabylary_lesson_create']);
		Route::post('create', ['as' => 'vocabulary-topic-store', 'uses' => 'Admin\VocabularyController@vocabulary_topic_store']);
		Route::get('edit/{id}', ['as' => 'vocabulary-topic-edit', 'uses' => 'Admin\VocabularyController@vocabulary_topic_edit']);
		Route::post('edit/{id}', ['as' => 'vocabulary-topic-update', 'uses' => 'Admin\VocabularyController@vocabulary_topic_update']);
	});

    //Excercise
});
