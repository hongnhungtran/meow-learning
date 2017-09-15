<?php 

Route::group(['prefix' => 'admin/document'], function () {
	Route::get('add', ['as' => 'add', 'uses' => 'Admin\DocumentController@addNewDocument']);
	Route::get('list', ['as' => 'list', 'uses' => 'Admin\DocumentController@getDocumentList']);
});