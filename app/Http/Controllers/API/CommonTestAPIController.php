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
}
