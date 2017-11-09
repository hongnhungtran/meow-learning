<?php 
Route::group(['prefix' => 'exam'], function () {
	Route::get('/', ['as' => '', 'uses' => 'Admin\VocabularyController@lessonAddNew']);
	Route::get('lessionList', ['as' => '', 'uses' => 'Admin\VocabularyController@lessonAddNew']);
});

	//Lesson
	Route::get('common-test', [
		'as' => 'common-test.lesson.index', 
		'uses' => 'Admin\CommonTestLessonController@index'
	]);

 	Route::get('common-test/create', [
 		'as' => 'common-test.lesson.create', 
 		'uses' => 'Admin\CommonTestLessonController@create'
 	]);

	Route::post('common-test/create', [
		'as' => 'common-test.lesson.store', 
		'uses' => 'Admin\CommonTestLessonController@store'
	]);

	Route::get('common-test/{id}/edit', [
		'as' => 'common-test.lesson.edit', 
		'uses' => 'Admin\CommonTestLessonController@edit'
	]);

	Route::post('common-test/{id}/edit', [
		'as' => 'common-test.lesson.update', 
		'uses' => 'Admin\CommonTestLessonController@update'
	]);

	Route::get('common-test/{id}', [
		'as' => 'common-test.lesson.show', 
		'uses' => 'Admin\CommonTestLessonController@show'
	]);

	//Question
	Route::get('common-test/{lesson_id}/question', [
		'as' => 'common-test.question.index', 
		'uses' => 'Admin\CommonTestQuestionController@index'
	]);

 	Route::get('common-test/{lesson_id}/question/create', [
 		'as' => 'common-test.question.create', 
 		'uses' => 'Admin\CommonTestQuestionController@create'
 	]);

	Route::post('common-test/{lesson_id}/question/create', [
		'as' => 'common-test.question.store', 
		'uses' => 'Admin\CommonTestQuestionController@store'
	]);

	Route::get('common-test/{lesson_id}/question/{question_id}/edit', [
		'as' => 'common-test.question.edit', 
		'uses' => 'Admin\CommonTestQuestionController@edit'
	]);

	Route::post('common-test/{lesson_id}/question/{question_id}/edit', [
		'as' => 'common-test.question.update', 
		'uses' => 'Admin\CommonTestQuestionController@update'
	]);

	Route::get('common-test/{lesson_id}/question/{question_id}', [
		'as' => 'common-test.question.show', 
		'uses' => 'Admin\CommonTestQuestionController@show'
	]);