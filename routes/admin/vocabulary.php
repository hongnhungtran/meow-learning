<?php 

Route::group(['prefix' => 'vocabulary'], function () {
    //Vocabulary management
	Route::get('/', ['as' => 'vocabulary-management', 'uses' => 'Admin\ManagementController@vocabulary_management']);

	//Topic
    Route::resource('topic', 'Admin\VocabularyTopicController');

    //Lesson
	Route::resource('lesson', 'Admin\VocabularyLessonController');

	//Exercise
	Route::resource('exercise', 'Admin\VocabularyExerciseController');
});
