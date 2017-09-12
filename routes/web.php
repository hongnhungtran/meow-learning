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

/*
Start Route
 */
Route::get('/', function () {
	return view('welcome');
});

Auth::routes();
 Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'api'], function () {
	Route::resource('weather', 'WeatherController');
});

Route::resource('crud', 'CRUDController');
/*
Admin Route
 */

/*Vocabulary*/
Route::group(['prefix' => 'admin/vocabulary', 'middleware' => 'web'], function () {
    Route::get('lessonAdd', 'Admin\VocabularyLessonController@create');
    Route::post('lessonAdd', 'Admin\VocabularyTopicController@store');

    Route::get('lessonList', 'Admin\VocabularyLessonController@index');
    Route::get('topicList', 'Admin\VocabularyTopicController@index');
 
    Route::get('topicAdd', 'Admin\VocabularyTopicController@create');
    Route::post('topicAdd', 'Admin\VocabularyTopicController@store');
});

/*Listening*/
Route::group(['prefix' => 'admin/listening'], function () {
    Route::get('lessionAdd', ['as' => 'getExerciseAdd', 'uses' => 'Admin\VocabularyController@lessonAddNew']);
    Route::get('lessionList', ['as' => 'getExerciseAdd', 'uses' => 'Admin\VocabularyController@lessonAddNew']);
});

/*Speaking*/
Route::group(['prefix' => 'admin/speaking'], function () {
    Route::get('lessionAdd', ['as' => 'getExerciseAdd', 'uses' => 'Admin\VocabularyController@lessonAddNew']);
    Route::get('lessionList', ['as' => 'getExerciseAdd', 'uses' => 'Admin\VocabularyController@lessonAddNew']);
});

/*Reading*/
Route::group(['prefix' => 'admin/reading'], function () {
    Route::get('lessionAdd', ['as' => 'getExerciseAdd', 'uses' => 'Admin\VocabularyController@lessonAddNew']);
    Route::get('lessionList', ['as' => 'getExerciseAdd', 'uses' => 'Admin\VocabularyController@lessonAddNew']);
});

/*Writing*/
Route::group(['prefix' => 'admin/writing'], function () {
    Route::get('lessionAdd', ['as' => 'getExerciseAdd', 'uses' => 'Admin\VocabularyController@lessonAddNew']);
    Route::get('lessionList', ['as' => 'getExerciseAdd', 'uses' => 'Admin\VocabularyController@lessonAddNew']);
});

/*Exam*/
Route::group(['prefix' => 'admin/listening'], function () {
    Route::get('lessionAdd', ['as' => 'getExerciseAdd', 'uses' => 'Admin\VocabularyController@lessonAddNew']);
    Route::get('lessionList', ['as' => 'getExerciseAdd', 'uses' => 'Admin\VocabularyController@lessonAddNew']);
});

/*Document*/
Route::group(['prefix' => 'admin/document'], function () {
    Route::get('add', ['as' => 'add', 'uses' => 'Admin\DocumentController@addNewDocument']);
    Route::get('list', ['as' => 'list', 'uses' => 'Admin\DocumentController@getDocumentList']);
});

/*
User Route
 */

/*Vocabulary*/
Route::group(['prefix' => 'vocabulary'], function () {
    Route::get('level', ['as' => 'getExerciseAdd', 'uses' => 'User\VocabularyController@getLevelList']);
    Route::get('topic', ['as' => 'getExerciseAdd', 'uses' => 'User\VocabularyController@getTopicList']);
});

/*Listening*/
Route::group(['prefix' => 'listening'], function () {
    Route::get('lessionAdd', ['as' => 'getExerciseAdd', 'uses' => 'Admin\VocabularyController@lessonAddNew']);
    Route::get('lessionList', ['as' => 'getExerciseAdd', 'uses' => 'Admin\VocabularyController@lessonAddNew']);
});

/*Speaking*/
Route::group(['prefix' => 'speaking'], function () {
    Route::get('lessionAdd', ['as' => 'getExerciseAdd', 'uses' => 'Admin\VocabularyController@lessonAddNew']);
    Route::get('lessionList', ['as' => 'getExerciseAdd', 'uses' => 'Admin\VocabularyController@lessonAddNew']);
});

/*Reading*/
Route::group(['prefix' => 'reading'], function () {
    Route::get('lessionAdd', ['as' => 'getExerciseAdd', 'uses' => 'Admin\VocabularyController@lessonAddNew']);
    Route::get('lessionList', ['as' => 'getExerciseAdd', 'uses' => 'Admin\VocabularyController@lessonAddNew']);
});

/*Writing*/
Route::group(['prefix' => 'writing'], function () {
    Route::get('lessionAdd', ['as' => 'getExerciseAdd', 'uses' => 'Admin\VocabularyController@lessonAddNew']);
    Route::get('lessionList', ['as' => 'getExerciseAdd', 'uses' => 'Admin\VocabularyController@lessonAddNew']);
});

/*Exam*/
Route::group(['prefix' => 'listening'], function () {
    Route::get('lessionAdd', ['as' => 'getExerciseAdd', 'uses' => 'Admin\VocabularyController@lessonAddNew']);
    Route::get('lessionList', ['as' => 'getExerciseAdd', 'uses' => 'Admin\VocabularyController@lessonAddNew']);
});

/*Document*/
Route::group(['prefix' => 'document'], function () {
    Route::get('add', ['as' => 'addNewDocument', 'uses' => 'Admin\DocumentController@addNewDocument']);
    Route::get('list', ['as' => 'getDocumentList', 'uses' => 'Admin\DocumentController@getDocumentList']);
});

/*
Google Drive
 */
Route::get('put', function() {
    Storage::cloud()->put('test.txt', 'Hello World');
    return 'File was saved to Google Drive';
});

Route::get('list', function() {
    $dir = '/';
    $recursive = false; // Get subdirectories also?
    $contents = collect(Storage::cloud()->listContents($dir, $recursive));

    //return $contents->where('type', '=', 'dir'); // directories
    return $contents->where('type', '=', 'file'); // files
});

Route::get('list-folder-contents', function() {
    // The human readable folder name to get the contents of...
    // For simplicity, this folder is assumed to exist in the root directory.
    $folder = 'Test Dir';

    // Get root directory contents...
    $contents = collect(Storage::cloud()->listContents('/', false));

    // Find the folder you are looking for...
    $dir = $contents->where('type', '=', 'dir')
    ->where('filename', '=', $folder)
        ->first(); // There could be duplicate directory names!

        if ( ! $dir) {
            return 'No such folder!';
        }

    // Get the files inside the folder...
        $files = collect(Storage::cloud()->listContents($dir['path'], false))
        ->where('type', '=', 'file');

        return $files->mapWithKeys(function($file) {
            $filename = $file['filename'].'.'.$file['extension'];
            $path = $file['path'];

        // Use the path to download each file via a generated link..
        // Storage::cloud()->get($file['path']);

            return [$filename => $path];
        });
    });

Route::get('get', function() {
    $filename = 'test.txt';

    $dir = '/';
    $recursive = false; // Get subdirectories also?
    $contents = collect(Storage::cloud()->listContents($dir, $recursive));

    $file = $contents
    ->where('type', '=', 'file')
    ->where('filename', '=', pathinfo($filename, PATHINFO_FILENAME))
    ->where('extension', '=', pathinfo($filename, PATHINFO_EXTENSION))
        ->first(); // there can be duplicate file names!

    //return $file; // array with file info

        $rawData = Storage::cloud()->get($file['path']);

        return response($rawData, 200)
        ->header('ContentType', $file['mimetype'])
        ->header('Content-Disposition', "attachment; filename='$filename'");
    });

Route::get('create-dir', function() {
    Storage::cloud()->makeDirectory('Test Dir');
    return 'Directory was created in Google Drive';
});

Route::get('put-in-dir', function() {
    $dir = '/';
    $recursive = false; // Get subdirectories also?
    $contents = collect(Storage::cloud()->listContents($dir, $recursive));

    $dir = $contents->where('type', '=', 'dir')
    ->where('filename', '=', 'Test Dir')
        ->first(); // There could be duplicate directory names!

        if ( ! $dir) {
            return 'Directory does not exist!';
        }

        Storage::cloud()->put($dir['path'].'/test.txt', 'Hello World');

        return 'File was created in the sub directory in Google Drive';
    });

Route::get('newest', function() {
    $filename = 'test.txt';

    Storage::cloud()->put($filename, \Carbon\Carbon::now()->toDateTimeString());

    $dir = '/';
    $recursive = false; // Get subdirectories also?

    $file = collect(Storage::cloud()->listContents($dir, $recursive))
    ->where('type', '=', 'file')
    ->where('filename', '=', pathinfo($filename, PATHINFO_FILENAME))
    ->where('extension', '=', pathinfo($filename, PATHINFO_EXTENSION))
    ->sortBy('timestamp')
    ->last();

    return Storage::cloud()->get($file['path']);
});
