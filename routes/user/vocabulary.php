<?php 

Route::group(['prefix' => 'vocabulary'], function () {
        // Level list
	Route::get('/', ['as' => 'vocabulary-level', 'uses' => 'User\VocabularyController@get_level_list']);

         //Topic list
	Route::get('/level/{id}/', ['as' => 'vocabulary-topic-list', 'uses' => 'User\VocabularyController@get_topic_list']);

	Route::get('/topic/{id}', ['as' => 'vocabulary-lesson-list', 'uses' => 'User\VocabularyController@get_lesson_list']);
        //Lesson list
	Route::get('/lesson/{id}', ['as' => 'vocabulary-exercise', 'uses' => 'User\VocabularyController@get_exercise']);

        //Excercise
});
