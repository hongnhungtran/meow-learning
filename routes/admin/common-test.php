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
});