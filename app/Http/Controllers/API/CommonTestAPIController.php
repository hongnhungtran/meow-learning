<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Lesson;
use App\Level;
use App\CommonTestQuestion;
use App\CommonTestAnswer;

class CommonTestAPIController extends Controller
{
	/**
     * Common Test Lesson ID　定義
     */
    public function __construct()
    {
        $this->common_test_course_id = 10;
    }
    
    public function getLessonList()
    {
    	$common_tests = Lesson::join('level', 'lesson.level_id', '=', 'level.level_id')
	        ->where('course_id', $this->common_test_course_id)
	        ->paginate(10);

        if (!$common_tests) {
            throw new HttpException(400, "Invalid data");
        }

        return response()->json(
            $common_tests,
            200
        );
    }

    public function showCurrentLesson($lesson_id)
    {
        if (!$lesson_id) {
           throw new HttpException(400, "Invalid id");
        }

        $common_tests = Lesson::join('level', 'lesson.level_id', '=', 'level.level_id')
            ->find($lesson_id);

        return response()->json([
            $common_tests,
        ], 200);
    }

    public function getQuestion($lesson_id)
    {
        if (!$lesson_id) {
           throw new HttpException(400, "Invalid id");
        }

        $questions = CommonTestQuestion::where('lesson_id', $lesson_id)
            ->get();

        return response()->json([
            $questions,
        ], 200);
    }

    public function showCurrentQuestion($lesson_id, $question_id)
    {
        if (!$lesson_id) {
           throw new HttpException(400, "Invalid id");
        }

        $question = CommonTestQuestion::where('lesson_id', $lesson_id)
            ->where('common_test_question_id', $question_id)
            ->get();

        return response()->json([
            $question,
        ], 200);
    }
}
