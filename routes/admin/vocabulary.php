<?php 

Route::group(['prefix' => 'vocabulary'], function () {
    //Vocabulary management
	Route::get('/', [
		'as' => 'vocabularyManagement', 
		'uses' => 'Admin\ManagementController@vocabularyManagement'
	]);
	
    //Lesson
	Route::get('lesson', [
		'as' => 'vocabularyLessonList', 
		'uses' => 'Admin\VocabularyController@lessonList'
	]);
 	Route::get('lesson/create', [
 		'as' => 'vocabularyCreateLesson', 
 		'uses' => 'Admin\VocabularyController@createLesson'
 	]);
	Route::post('lesson/create', [
		'as' => 'vocabularyStoreLesson', 
		'uses' => 'Admin\VocabularyController@storeLesson'
	]);
	Route::get('lesson/{id}/edit', [
		'as' => 'vocabularyEditLesson', 
		'uses' => 'Admin\VocabularyController@editLesson'
	]);
	Route::post('lesson/{id}/edit', [
		'as' => 'vocabularyEditLesson', 
		'uses' => 'Admin\VocabularyController@updateLesson'
	]);
	Route::get('lesson/{id}', [
		'as' => 'vocabularyShowLesson', 
		'uses' => 'Admin\VocabularyController@showLesson'
	]);
	Route::post('lesson/search', [
		'as' => 'searchLesson', 
		'uses' => 'Admin\VocabularyController@searchLesson'
	]);
	Route::get('lesson/{id}/create', [
		'as' => 'createExercise', 
		'uses' => 'Admin\VocabularyController@createExercise'
	]);
	Route::post('lesson/{id}/create', [
		'as' => 'storeExercise', 
		'uses' => 'Admin\VocabularyController@storeExercise'
	]);
	
});
