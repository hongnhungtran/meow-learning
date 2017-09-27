<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/
/*API*/
$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {
	/**
	 * Test
	 */
	$api->get('test', function () {
		return 'It is ok';
	});

	$api->get('user', 'App\Http\Controllers\User\UserController@index');
	$api->get('book', 'App\Http\Controllers\BookController@index');
	$api->get('book/book_id={id}', 'App\Http\Controllers\BookController@show');

	/**
	 * Vocabulary
	 */
	$api->get('vocabulary/topic', 'App\Http\Controllers\Admin\VocabularyController@vocabulary_topic_api');
	$api->get('vocabulary/topic/topic_id={id}', 'App\Http\Controllers\Admin\VocabularyController@vocabulary_topic_current_api');

	$api->get('vocabulary/lesson', 'App\Http\Controllers\Admin\VocabularyController@vocabulary_lesson_api');

	/**
	 * Listening
	 */
	
	/**
	 * Speaking
	 */

	/**
	 * Reading
	 */
	
	/**
	 * Writing
	 */
	
	/**
	 * TOEFL
	 */
}); 