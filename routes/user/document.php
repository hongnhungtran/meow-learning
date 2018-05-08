<?php 
Route::group(['prefix' => 'document'], function () {
	//Document full list
	Route::get('/', [
		'as' => 'document-list', 
		'uses' => 'User\DocumentController@get_all_list'
	]);

    //Document content
    Route::get('/{id}', [
		'as' => 'document-content', 
		'uses' => 'User\DocumentController@get_document_content'
	]);

    //Document category
	Route::get('category/{id}', [
		'as' => 'document-category', 
		'uses' => 'User\DocumentController@get_document_category'
	]);

	//Document search by keyword
	Route::post('/', [
		'as' => 'document-search', 
		'uses' => 'User\DocumentController@search_document'
	]);
	
});