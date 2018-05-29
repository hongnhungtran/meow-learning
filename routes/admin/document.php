<?php 
Route::group(['prefix' => 'document'], function () {
	Route::post('/search', [
		'as' => 'searchDocument', 
		'uses' => 'Admin\DocumentController@searchDocument'
	]);
	Route::get('/', [
		'as' => 'documentList', 
		'uses' => 'Admin\DocumentController@documentList'
	]);
	Route::get('/{id}', [
		'as' => 'getDetail', 
		'uses' => 'Admin\DocumentController@getDetail'
	]);
	Route::get('/{id}/edit', [
		'as' => 'editForm', 
		'uses' => 'Admin\DocumentController@editForm'
	]);
	Route::put('/{id}/edit', [
		'as' => 'documentUpdate', 
		'uses' => 'Admin\DocumentController@documentUpdate'
	]);
});
