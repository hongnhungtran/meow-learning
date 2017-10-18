<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommonTestQuestion extends Model
{
    protected $table = 'common_test_question';

    protected $primaryKey = 'common_test_question_id';

    protected $fillable = [
    	'common_test_question_id',
    	'lesson_id',
    	'common_test_question'
    ];

    public function common_test_answer()
    {
        return $this->hasMany('App\CommonTestAnswer', 'common_test_question_id');
    }

    public function get_questions()
    {
    	$questions = CommonTestQuestion::join('lesson', 'lesson.lesson_id', '=', 'common_test_question.lesson_id')
            ->get();

        return $questions;
    }

    /**
     * [get question content from question id]
     * @return [type] [description]
     */
    public function get_question_content($question_id)
    {
        $question_content = "";

        $question_contents = CommonTestQuestion::select('common_test_question')
            ->where('common_test_question_id', $question_id)
            ->get();

        foreach ($question_contents as $question) {
            $question_content = $question->common_test_question;
        }

        return $question_content;
    }
}
