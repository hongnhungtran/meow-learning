<?php 

Route::resource('document', 'Admin\DocumentController');

Route::group(['prefix' => 'document'], function () {
	Route::post('/search', [
		'as' => 'searchDocument', 
		'uses' => 'Admin\DocumentController@searchDocument'
	]);
});
