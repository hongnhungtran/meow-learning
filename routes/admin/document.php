<?php 

Route::group(['prefix' => 'document'], function () {
	//All document category list
	Route::get('/', ['as' => 'add', 'uses' => 'Admin\DocumentController@addNewDocument']);
	//Add new document category
	Route::get('document-category/create', ['as' => 'add', 'uses' => 'Admin\DocumentController@addNewDocument']);
	Route::get('list', ['as' => 'list', 'uses' => 'Admin\DocumentController@getDocumentList']);
	Route::get('add', ['as' => 'add', 'uses' => 'Admin\DocumentController@addNewDocument']);
	Route::get('list', ['as' => 'list', 'uses' => 'Admin\DocumentController@getDocumentList']);
});