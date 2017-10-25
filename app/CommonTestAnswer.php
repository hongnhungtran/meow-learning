<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommonTestAnswer extends Model
{
    protected $table = 'common_test_answer';

    protected $primaryKey = 'common_test_answer_id';

    protected $fillable = [
    	'common_test_answer_id',
    	'common_test_question_id',
    	'common_test_answer_num',
    	'common_test_answer',
	    'common_test_answer_flag'
    ];

    public function common_test_question()
    {
        return $this->belongsTo('App\CommonTestQuestion');
    }

    public function get_answers() {
    	$common_test_question = new CommonTestQuestion;
        $questions = $common_test_question->get_questions();
	
		$result = [];

		foreach ($questions as $question) {
            $answers = CommonTestAnswer::join('common_test_question', 'common_test_answer.common_test_question_id', '=', 'common_test_question.common_test_question_id')
            ->join('answer_num', 'answer_num.answer_num_id', '=', 'common_test_answer.common_test_answer_num')
            ->where('common_test_question.common_test_question_id', $question->common_test_question_id)
            ->get();

            $result[] = $answers;
        }

        return $result;
    }
}
