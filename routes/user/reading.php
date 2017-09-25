<?php 
Route::group(['prefix' => 'reading'], function () {
	Route::get('', ['as' => '', 'uses' => 'Admin\ReadingController@lessonAddNew']);
	Route::get('', ['as' => '', 'uses' => 'Admin\ReadingController@lessonAddNew']);
});