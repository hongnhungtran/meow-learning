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
}
