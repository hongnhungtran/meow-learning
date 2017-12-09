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


	$api->get('grammar', 'App\Http\Controllers\GrammarController@index');
	$api->get('grammar/{id}', 'App\Http\Controllers\GrammarController@show');


	/**
	 * common test lesson
	 */
	
	$api->get('v1/common-test/lesson', 'App\Http\Controllers\API\CommonTestAPIController@getLessonList');
	$api->get('v1/common-test/lesson/lesson_id={lesson_id}', 'App\Http\Controllers\API\CommonTestAPIController@showCurrentLesson');

	/**
	 * common test lesson's question
	 */
	$api->get('v1/common-test/lesson/question/lesson_id={lesson_id}', 'App\Http\Controllers\API\CommonTestAPIController@getQuestion');
	$api->get('v1/common-test/lesson/question/lesson_id={lesson_id}/question_id={question_id}', 'App\Http\Controllers\API\CommonTestAPIController@showCurrentQuestion');
	
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