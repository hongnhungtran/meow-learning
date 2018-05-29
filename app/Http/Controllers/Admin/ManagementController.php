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
		$count = $this->lesson_count->get_vocabulary_lesson()->count();
		return view('admin.vocabulary.management', compact('count');
	}

	public function listeningManagement()
	{
		$count = $this->lesson_count->get_listening_lesson()->count();
		return view('admin.listening.management', compact('count');
	}

	public function readingManagement()
	{
		$count = $this->lesson_count->get_reading_lesson()->count();
		return view('admin.reading.management', compact('count');
	}

	public function writingManagement()
	{
		$count = $this->lesson_count->get_writing_lesson()->count();
		return view('admin.writing.management', compact('count');
	}

	public function speakingManagement()
	{
		$count = $this->lesson_count->get->count();
		return view('admin.speaking.management', compact('count');
	}

	public function eiltsManagement()
	{
		$lesson_count = Lesson::where('course_id', $this->eilts_course_id)
			->count();
		return view('admin.eilts.management', compact('count');
	}

	public function toeflManagement()
	{
		$lesson_count = Lesson::where('course_id', $this->toefl_course_id)
			->count();
		return view('admin.toefl.management', compact('count');
	}

	public function toeicManagement()
	{
		$lesson_count = Lesson::where('course_id', $this->toeic_course_id)
			->count();
		return view('admin.toeic.management', compact('count');
	}

	public function commonTestManagement()
	{
		$lesson_count = Lesson::where('course_id', $this->common_test_course_id)
			->count();
		return view('admin.common-test.management', compact('count');
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
