<?php 

Route::group(['prefix' => 'writing'], function () {
	Route::get('/', [
		'as' => 'writingManagement', 
		'uses' => 'Admin\ManagementController@writingManagement'
	]);
	
    //Lesson
	Route::get('lesson', [
		'as' => 'lessonList', 
		'uses' => 'Admin\WritingController@lessonList'
	]);
 	Route::get('lesson/create', [
 		'as' => 'createLesson', 
 		'uses' => 'Admin\WritingController@createLesson'
 	]);
	Route::post('lesson/create', [
		'as' => 'storeLesson', 
		'uses' => 'Admin\WritingController@storeLesson'
	]);
	Route::get('lesson/{id}/edit', [
		'as' => 'editLesson', 
		'uses' => 'Admin\WritingController@editLesson'
	]);
	Route::post('lesson/{id}/edit', [
		'as' => 'editLesson', 
		'uses' => 'Admin\WritingController@updateLesson'
	]);
	Route::get('lesson/{id}', [
		'as' => 'showLesson', 
		'uses' => 'Admin\WritingController@showLesson'
	]);
	Route::post('lesson/search', [
		'as' => 'searchLesson', 
		'uses' => 'Admin\WritingController@searchLesson'
	]);
});
