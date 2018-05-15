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

        $result = [];
        foreach ($contents as $key => $value) {
                        $result[$key]['common_test_question_id'] = $value->common_test_question_id;
                        $result[$key]['lesson_id'] = $value->common_test_question_id;
                        $result[$key]['common_test_question'] = $value->common_test_question;
                        $result[$key]['option_1'] = $value->option_1;
                        $result[$key]['option_2'] = $value->option_2;
                        $result[$key]['option_3'] = $value->option_3;
                        $result[$key]['option_4'] = $value->option_4;
                        $result[$key]['true_answer'] = $value->answer;
                        $result[$key]['explain'] = $value->explain;
            foreach ($getData as $keyData => $valueData) {
                if($keyData = $result[$key]['common_test_question_id']) {
                    $result[$key]['user_answer'] = $getData[$keyData];
                }
            }
        }

        $totalQuestion = count($result);
        $countTrueAnswer = 0;
        foreach ($result as $resultKey => $resultValue) {
            if ($result[$resultKey]['true_answer'] == $result[$resultKey]['user_answer']) {
                $countTrueAnswer++;

            }
        }

        //get view
        return view('user.common-test.checkAnswer', compact('lesson', 'course', 'contents', 'num', 'result', 'totalQuestion', 'countTrueAnswer'));
    }
}
