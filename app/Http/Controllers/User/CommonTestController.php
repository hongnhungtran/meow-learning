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

class CommonTestController extends Controller
{
    private $user_answer = [];

    public function __construct()
    {
        $this->common_test_course_id = 10;
    }

    public function get_level_list() 
    {
        $levels = Level::all();
        $courses = Course::all();
        $course = Course::find($this->common_test_course_id);

        return view('user.common-test.levelList', compact('levels', 'courses', 'course'));
    }

    public function get_lesson_list($id) 
    {
        $lessons = Lesson::join('level', 'Lesson.level_id', '=', 'level.level_id')
            ->where('course_id', $this->common_test_course_id)
            ->where('lesson.level_id', $id)
            ->paginate(10);
        $level = Level::find($id);
        $course = Course::find($this->common_test_course_id);
        $num=1;

        return view('user.common-test.lessonList', compact('lessons', 'num', 'level', 'course'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function get_exercise($id) 
    {
        $lesson = Lesson::find($id);
        $contents = CommonTestQuestion::join('lesson', 'lesson.lesson_id', '=', 'common_test_question.lesson_id')
            ->get();
        $course = Course::find($this->common_test_course_id);
        $num = 1;
        return view('user.common-test.commonTest', compact('lesson', 'course', 'contents', 'num'));
    }

    public function check_result(Request $request, $lesson_id)
    {
        //get result
        $getData = $request->all();

        //get view content
        $lesson = Lesson::find($lesson_id);
        $contents = CommonTestQuestion::join('lesson', 'lesson.lesson_id', '=', 'common_test_question.lesson_id')
                    ->get();

        $course = Course::find($this->common_test_course_id);
        $num = 1;

        $true_answers = [];
        foreach ($contents as $key => $value) {
                        $true_answers[$key]['common_test_question_id'] = $value->common_test_question_id;
                        $true_answers[$key]['lesson_id'] = $value->common_test_question_id;
                        $true_answers[$key]['common_test_question'] = $value->common_test_question;
                        $true_answers[$key]['option_1'] = $value->option_1;
                        $true_answers[$key]['option_2'] = $value->option_2;
                        $true_answers[$key]['option_3'] = $value->option_3;
                        $true_answers[$key]['option_4'] = $value->option_4;
                        $true_answers[$key]['true_answer'] = $value->answer;
        }

        $user_answers = [];
        foreach ($getData as $key => $value) {
            if ($true_answers[$key]['common_test_question_id'] = $user_answers[$key]) {
                $true_answers[$key]['user_answer'] = $user_answers[$key][''];
            } else {
                $true_answers[$key]['user_answer'] = null;
            }
        }
        
        //get view
        return view('user.common-test.checkAnswer', compact('lesson', 'course', 'contents', 'num', 'true_answers', 'user_answers'));
    }
}
