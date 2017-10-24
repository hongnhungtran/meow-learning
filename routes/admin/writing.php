<?php 

Route::get('/writing', ['as' => 'writing-management', 'uses' => 'Admin\ManagementController@writing_management']);
Route::resource('/writing/lesson', 'Admin\WritingLessonController');