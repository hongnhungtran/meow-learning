<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Topic;
use App\Lesson;
use App\Level;
use App\Vocabulary;
use App\Course;
use App\CommonTestQuestion;

class ReadingController extends Controller
{
    public function __construct()
    {
        $this->reading_course_id = 4;
    }

    public function get_level_list() 
    { 
        $levels = Level::all();
        $courses = Course::all();
        $course = Course::find($this->reading_course_id);

        return view('user.reading.levelList', compact('levels', 'courses', 'course'));
    }

    public function get_lesson_list($id) 
    {
        $lessons = Lesson::join('level', 'Lesson.level_id', '=', 'level.level_id')
            ->where('course_id', $this->reading_course_id)
            ->where('lesson.level_id', $id)
            ->paginate(10);
        $level = Level::find($id);
        $course = Course::find($this->reading_course_id);
        $num=1;

        return view('user.reading.lessonList', compact('lessons', 'num', 'level', 'course'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function get_exercise($id) 
    {
        
    }
}
