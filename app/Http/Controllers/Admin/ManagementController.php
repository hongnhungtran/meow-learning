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
		$this->vocabulary_course_id = 1;
		$this->listening_course_id = 2;
		$this->speaking_course_id = 3;
		$this->reading_course_id = 4;
		$this->writing_course_id = 5;
		$this->toefl_course_id = 6;
		$this->toeic_course_id = 7;
		$this->eilts_course_id = 8;
		$this->common_test_course_id = 10;
	}

	public function home()
	{
		return view('admin.shared.home');
	}

	public function vocabulary_management()
	{
		$topic_count = Topic::where('course_id', $this->vocabulary_course_id)
			->count();

		$lesson_count = Lesson::where('course_id', $this->vocabulary_course_id)
			->count();

		return view('admin.vocabulary.management', compact('lesson_count', 'topic_count'));
	}

	public function listening_management()
	{
		$lesson_count = Lesson::where('course_id', $this->listening_course_id)
			->count();

		return view('admin.listening.management', compact('lesson_count'));
	}

	public function reading_management()
	{
		$lesson_count = Lesson::where('course_id', $this->reading_course_id)
			->count();

		return view('admin.reading.management', compact('lesson_count'));
	}

	public function writing_management()
	{
		$lesson_count = Lesson::where('course_id', $this->writing_course_id)
			->count();

		return view('admin.writing.management', compact('lesson_count'));
	}

	public function speaking_management()
	{
		$lesson_count = Lesson::where('course_id', $this->speaking_course_id)
			->count();

		return view('admin.speaking.management', compact('lesson_count'));
	}

	public function eilts_management()
	{
		$lesson_count = Lesson::where('course_id', $this->eilts_course_id)
			->count();

		return view('admin.eilts.management', compact('lesson_count'));
	}

	public function toefl_management()
	{
		$lesson_count = Lesson::where('course_id', $this->toefl_course_id)
			->count();

		return view('admin.toefl.management', compact('lesson_count'));
	}

	public function toeic_management()
	{
		$lesson_count = Lesson::where('course_id', $this->toeic_course_id)
			->count();

		return view('admin.toeic.management', compact('lesson_count'));
	}

	public function common_test_management()
	{
		$lesson_count = Lesson::where('course_id', $this->common_test_course_id)
			->count();

		return view('admin.common-test.management', compact('lesson_count'));
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
