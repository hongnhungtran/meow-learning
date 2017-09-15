<?php 
Route::group(['prefix' => 'listening'], function () {
	Route::get('/', ['as' => '', 'uses' => 'Admin\ListeningController@lessonAddNew']);
	Route::get('lessionList', ['as' => '', 'uses' => 'Admin\VocabularyController@lessonAddNew']);
});