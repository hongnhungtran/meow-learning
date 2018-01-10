<?php 
Route::group(['prefix' => 'common-test'], function () {
	//Management
	Route::get('/', [
		'as' => 'common-test-management', 
		'uses' => 'Admin\ManagementController@common_test_management'
	]);

	//Lesson
	Route::get('/test', [
		'as' => 'common-test.lesson.index', 
		'uses' => 'Admin\CommonTestLessonController@index'
	]);

	/*Route::get('common-test/search', [
		'as' => 'common-test.lesson.search', 
		'uses' => 'Admin\CommonTestLessonController@searchLesson'
	]);
*/
	Route::post('/search', [
		'as' => 'common-test.lesson.search', 
		'uses' => 'Admin\CommonTestLessonController@searchLesson'
	]);

 	Route::get('/create', [
 		'as' => 'common-test.lesson.create', 
 		'uses' => 'Admin\CommonTestLessonController@create'
 	]);

	Route::post('/create', [
		'as' => 'common-test.lesson.store', 
		'uses' => 'Admin\CommonTestLessonController@store'
	]);

	Route::get('/{id}/edit', [
		'as' => 'common-test.lesson.edit', 
		'uses' => 'Admin\CommonTestLessonController@edit'
	]);

	Route::post('/{id}/edit', [
		'as' => 'common-test.lesson.update', 
		'uses' => 'Admin\CommonTestLessonController@update'
	]);

	Route::get('/{id}', [
		'as' => 'common-test.lesson.show', 
		'uses' => 'Admin\CommonTestLessonController@show'
	]);

	Route::get('generate-docx', 'CommonTestQuestionController@generateDocx');
	
	//Question
	Route::get('/{lesson_id}/question', [
		'as' => 'common-test.question.index', 
		'uses' => 'Admin\CommonTestQuestionController@index'
	]);

 	Route::get('/{lesson_id}/question/create', [
 		'as' => 'common-test.question.create', 
 		'uses' => 'Admin\CommonTestQuestionController@create'
 	]);

	Route::post('/{lesson_id}/question/create', [
		'as' => 'common-test.question.store', 
		'uses' => 'Admin\CommonTestQuestionController@store'
	]);

	Route::get('/{lesson_id}/question/{question_id}/edit', [
		'as' => 'common-test.question.edit', 
		'uses' => 'Admin\CommonTestQuestionController@edit'
	]);

	Route::post('/{lesson_id}/question/{question_id}/edit', [
		'as' => 'common-test.question.update', 
		'uses' => 'Admin\CommonTestQuestionController@update'
	]);

	Route::get('/{lesson_id}/question/{question_id}', [
		'as' => 'common-test.question.show', 
		'uses' => 'Admin\CommonTestQuestionController@show'
	]);
});