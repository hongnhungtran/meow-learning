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
    	'common_test_answer',
	    'common_test_answer_flag'
    ];
}
