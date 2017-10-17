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
}
