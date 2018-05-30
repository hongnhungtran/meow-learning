<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Topic;
use App\Lesson;
use App\Level;
use App\Vocabulary;
use App\User;
use Session; 

class ManagementController extends Controller
{
	public function __construct()
	{
		$this->lesson_count = new Lesson;
	}

	public function home()
	{
		return view('admin.shared.home');
	}

	public function vocabularyManagement()
	{
		$count = $this->lesson_count->getVocabularyLesson()->count();
		return view('admin.vocabulary.management', compact('count'));
	}

	public function listeningManagement()
	{
		$count = $this->lesson_count->getListeningLesson()->count();
		return view('admin.listening.management', compact('count'));
	}

	public function readingManagement()
	{
		$count = $this->lesson_count->getReadingLesson()->count();
		return view('admin.reading.management', compact('count'));
	}

	public function writingManagement()
	{
		$count = $this->lesson_count->getWritingLesson()->count();
		return view('admin.writing.management', compact('count'));
	}

	public function speakingManagement()
	{
		$count = $this->lesson_count->getSpeakingLesson()->count();
		return view('admin.speaking.management', compact('count'));
	}

	public function eiltsManagement()
	{
		$count = $this->lesson_count->getEiltsLesson()->count();
		return view('admin.eilts.management', compact('count'));
	}

	public function toeflManagement()
	{
		$count = $this->lesson_count->getToeflLesson()->count();
		return view('admin.toefl.management', compact('count'));
	}

	public function toeicManagement()
	{
		$count = $this->lesson_count->gettToeicLesson()->count();
		return view('admin.toeic.management', compact('count'));
	}

	public function commonTestManagement()
	{
		$count = $this->lesson_count->getCommonTestLesson()->count();
		return view('admin.common-test.management', compact('count'));
	}

	public function showLogin()
	{
		return view('admin.shared.login');
	}

	public function doLogin(Request $request)
	{
		$request->validate([
	    'username'    => 'required|min:3',
			'password' => 'required|alphaNum|min:3',
		]);
		$username = User::where('username', 'LIKE', $request->username)->get();
		$password = User::where('password', 'LIKE', $request->password)->get();
		if(count($username) !== 1 && count($password) !== 1) {
			return view('admin.shared.home');
		} else {
			Session::flash('status', 'Wrong username or password');
			return view('admin.shared.login');
		}
	}

	public function doLogout()
	{
	    Auth::logout();
	    return view('admin.shared.login');
	}
}
