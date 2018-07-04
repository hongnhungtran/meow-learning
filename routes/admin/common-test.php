<?php 
Route::group(['prefix' => 'common-test'], function () {
	//Management
	Route::get('/', [
		'as' => 'commonTestManagement', 
		'uses' => 'Admin\ManagementController@commonTestManagement'
	]);
	//Lesson
	Route::get('/list', [
		'as' => 'commonTestLessonList', 
		'uses' => 'Admin\CommonTestController@lessonList'
	]);
	Route::post('/search', [
		'as' => 'searchLesson', 
		'uses' => 'Admin\CommonTestController@searchLesson'
	]);
 	Route::get('/create', [
 		'as' => 'commonTestCreateLesson', 
 		'uses' => 'Admin\CommonTestController@createLesson'
 	]);
	Route::post('/create', [
		'as' => 'commonTestStoreLesson', 
		'uses' => 'Admin\CommonTestController@storeLesson'
	]);
	Route::get('/{id}/edit', [
		'as' => 'commonTestEditLesson', 
		'uses' => 'Admin\CommonTestController@editLesson'
	]);
	Route::post('/{id}/edit', [
		'as' => 'commonTestEditLesson', 
		'uses' => 'Admin\CommonTestController@updateLesson'
	]);
	Route::get('/{id}/detail', [
		'as' => 'commonTestShowLesson', 
		'uses' => 'Admin\CommonTestController@showLesson'
	]);
	Route::get('/{id}/question', [
		'as' => 'commonTestQuestionList', 
		'uses' => 'Admin\CommonTestController@questionList'
	]);
	Route::get('/{lesson_id}/question/{question_id}', [
		'as' => 'questionEdit', 
		'uses' => 'Admin\CommonTestController@questionEdit'
	]);
	Route::get('/{lesson_id}/question/create', [
		'as' => 'questionCreate', 
		'uses' => 'Admin\CommonTestController@questionCreate'
	]);
	Route::post('/{lesson_id}/question/create', [
		'as' => 'questionUpdate', 
		'uses' => 'Admin\CommonTestController@questionUpdate'
	]);
});