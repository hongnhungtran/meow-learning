<?php 

Route::group(['prefix' => 'vocabulary'], function () {
    //Index
	Route::get('/', ['as' => 'management', 'uses' => 'Admin\VocabularyController@vocabulary_management']);

	//topic
    Route::group(['prefix' => 'topic'], function () {
		Route::get('/', ['as' => 'vocabulary.topic.list', 'uses' => 'Admin\VocabularyController@vocabulary_topic_index']);
		Route::get('create', ['as' => 'vocabulary.topic.create', 'uses' => 'Admin\VocabularyController@vocabulary_topic_create']);
		Route::post('create', ['as' => 'vocabulary.topic.store', 'uses' => 'Admin\VocabularyController@vocabulary_topic_store']);
		Route::get('edit/{id}', ['as' => 'vocabulary.topic.edit', 'uses' => 'Admin\VocabularyController@vocabulary_topic_edit']);
		Route::post('edit/{id}', ['as' => 'vocabulary.topic.update', 'uses' => 'Admin\VocabularyController@vocabulary_topic_update']);
	});
    
    //Lesson
    Route::group(['prefix' => 'lesson'], function () {
		Route::get('lesson', ['as' => 'get_lesson_list', 'uses' => 'Admin\VocabularyController@get_lesson_list']);
		Route::get('lesson/create', ['as' => 'topicList', 'uses' => 'Admin\VocabularyController@create_lesson']);
		Route::post('lesson/create', ['as' => 'topicList', 'uses' => 'Admin\VocabularyController@create_lesson']);
	});

    //Excercise
});
