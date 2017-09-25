<?php 

Route::group(['prefix' => 'vocabulary'], function () {
        // Index
	Route::get('/', ['as' => 'management', 'uses' => 'Admin\VocabularyController@vocabulary_management']);

         //Topic
	Route::get('topic', ['as' => 'vocabulary.topic.list', 'uses' => 'Admin\VocabularyController@vocabulary_topic_index']);
	Route::get('topic/create', ['as' => 'vocabulary.topic.create', 'uses' => 'Admin\VocabularyController@vocabulary_topic_create']);
	Route::post('topic/create', ['as' => 'vocabulary.topic.store', 'uses' => 'Admin\VocabularyController@vocabulary_topic_store']);
	Route::get('topic/edit/{id}', ['as' => 'vocabulary.topic.edit', 'uses' => 'Admin\VocabularyController@vocabulary_topic_edit']);
	Route::post('topic/edit/{id}', ['as' => 'vocabulary.topic.update', 'uses' => 'Admin\VocabularyController@vocabulary_topic_update']);

        //Lesson
	Route::get('lesson', ['as' => 'get_lesson_list', 'uses' => 'Admin\VocabularyController@get_lesson_list']);
	Route::get('lesson/create', ['as' => 'topicList', 'uses' => 'Admin\VocabularyController@create_lesson']);
	Route::post('lesson/create', ['as' => 'topicList', 'uses' => 'Admin\VocabularyController@create_lesson']);

        //Excercise
});
