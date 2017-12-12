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

/**
 * Test route
 */
Auth::routes();

Route::group(['prefix' => 'api'], function () {
    Route::resource('weather', 'WeatherController');
});

Route::get('/_debugbar/assets/stylesheets', [
    'as' => 'debugbar-css',
    'uses' => '\Barryvdh\Debugbar\Controllers\AssetController@css'
]);

Route::get('/_debugbar/assets/javascript', [
    'as' => 'debugbar-js',
    'uses' => '\Barryvdh\Debugbar\Controllers\AssetController@js'
]);


/**
 * Admin Route
 */

Route::group(['prefix' => 'admin'], function () {
    //Register
    Route::get('/user/register', [
        'as' => 'user.register', 
        'uses' => 'Auth\RegisterController@create'
    ]);

    //Home
    Route::get('/', [
        'as' => 'admin.home', 
        'uses' => 'Admin\ManagementController@home'
    ]);
    
    //Course
    require(__DIR__ . "/admin/vocabulary.php");
    require(__DIR__ . "/admin/listening.php");
    require(__DIR__ . "/admin/speaking.php");
    require(__DIR__ . "/admin/reading.php");
    require(__DIR__ . "/admin/writing.php");
    require(__DIR__ . "/admin/exam.php");
    require(__DIR__ . "/admin/document.php");  
});

/**
 * User Route
 */

Route::group(['prefix' => '/'], function () {
    //Home
    Route::get('/', [
        'as' => 'user-home', 
        'uses' => 'User\UserController@home'
    ]);
    
    //Course
    require(__DIR__ . "/user/vocabulary.php");
    require(__DIR__ . "/user/listening.php");
    require(__DIR__ . "/user/speaking.php");
    require(__DIR__ . "/user/reading.php");
    require(__DIR__ . "/user/writing.php");
    require(__DIR__ . "/user/exam.php");
    require(__DIR__ . "/user/document.php");  
});


/**
 * Google Drive
 */

//upload to ggdrive
Route::get('put', function () {
    Storage::cloud()->put('test.txt', 'Hello World');
    return 'File was saved to Google Drive';
});

//list up data in ggdrive, JSON
Route::get('list', function () {
    $dir = '/';
    $recursive = false; // Get subdirectories also?
    $contents = collect(Storage::cloud()->listContents($dir, $recursive));

    //return $contents->where('type', '=', 'dir'); // directories
    return $contents->where('type', '=', 'file'); // files
});

//list up forlder
Route::get('list-folder-contents', function () {
    // The human readable folder name to get the contents of...
    // For simplicity, this folder is assumed to exist in the root directory.
    $folder = 'Test Dir';

    // Get root directory contents...
    $contents = collect(Storage::cloud()->listContents('/', false));

    // Find the folder you are looking for...
    $dir = $contents->where('type', '=', 'dir')
    ->where('filename', '=', $folder)
        ->first(); // There could be duplicate directory names!

    if (! $dir) {
        return 'No such folder!';
    }

    // Get the files inside the folder...
        $files = collect(Storage::cloud()->listContents($dir['path'], false))
        ->where('type', '=', 'file');

        return $files->mapWithKeys(function ($file) {
            $filename = $file['filename'].'.'.$file['extension'];
            $path = $file['path'];

        // Use the path to download each file via a generated link..
        // Storage::cloud()->get($file['path']);

            return [$filename => $path];
        });
});

//download file
Route::get('get', function () {
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

//Create new folder
Route::get('create-dir', function () {
    Storage::cloud()->makeDirectory('Test Dir');
    return 'Directory was created in Google Drive';
});

//Upload file to folder
Route::get('put-in-dir', function () {
    $dir = '/';
    $recursive = false; // Get subdirectories also?
    $contents = collect(Storage::cloud()->listContents($dir, $recursive));

    $dir = $contents->where('type', '=', 'dir')
    ->where('filename', '=', 'Test Dir')
        ->first(); // There could be duplicate directory names!

    if (! $dir) {
        return 'Directory does not exist!';
    }

        Storage::cloud()->put($dir['path'].'/test.txt', 'Hello World');

        return 'File was created in the sub directory in Google Drive';
});

//get newest file
Route::get('newest', function () {
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
