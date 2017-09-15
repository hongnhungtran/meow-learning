<?php 

Route::group(['prefix' => 'document'], function () {
	Route::get('add', ['as' => 'add', 'uses' => 'Admin\DocumentController@addNewDocument']);
	Route::get('list', ['as' => 'list', 'uses' => 'Admin\DocumentController@getDocumentList']);
});