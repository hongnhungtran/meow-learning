<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Topic;
use App\Lesson;
use App\Level;
use App\Vocabulary;

class ManagementController extends Controller
{
	public function __construct()
    {
        $this->vocabulary_course_id = 1;
        $this->writing_course_id = 5;
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
        return view('admin.listening.management');
    }

    public function writing_management()
    {
    	$lesson_count = Lesson::where('course_id', $this->writing_course_id)
    		->count();

        return view('admin.writing.management', compact('lesson_count'));
    }

    public function home()
    {
        return view('admin.shared.home');
    }

}
