<?php 
Route::group(['prefix' => 'exam'], function () {
	Route::get('/', ['as' => '', 'uses' => 'Admin\VocabularyController@lessonAddNew']);
	Route::get('lessionList', ['as' => '', 'uses' => 'Admin\VocabularyController@lessonAddNew']);
});

Route::resource('common-test', 'Admin\CommonTestLessonController');
Route::resource('common-test', 'Admin\CommonTestQuestionController');