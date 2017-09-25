<?php 
Route::group(['prefix' => 'writing'], function () {
	Route::get('/', ['as' => '', 'uses' => 'Admin\WritingController@lessonAddNew']);
	Route::get('', ['as' => '', 'uses' => 'Admin\WritingController@lessonAddNew']);
});
