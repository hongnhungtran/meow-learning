<?php 
Route::group(['prefix' => 'speaking'], function () {
	Route::get('/', ['as' => '', 'uses' => 'Admin\VocabularyController@lessonAddNew']);
	Route::get('lessionList', ['as' => '', 'uses' => 'Admin\VocabularyController@lessonAddNew']);
});