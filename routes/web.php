<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Test Route*/
Route::get('/', function () {
	return view('welcome');
});

Route::resource("tasks","TaskController");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource("tasks","TaskController");
});

Route::group(['prefix' => 'api'], function () {
	Route::resource('weather', 'WeatherController');
});

Route::get('user', function() {
	Storage::disk('google')->put('test.txt', 'Hello World');
});


/*Admin Route*/

Route::get('/admin','admin\AdminController@home');

/*Route::get('/user','user\UserController@home');*/