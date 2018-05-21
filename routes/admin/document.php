<?php 

Route::resource('document', 'Admin\DocumentController');

Route::group(['prefix' => 'document'], function () {
	//Management
	Route::post('/search', [
		'as' => 'searchDocument', 
		'uses' => 'Admin\DocumentController@searchDocument'
	]);
});
