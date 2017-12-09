<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grammar extends Model
{
    protected $table = 'grammar';

    protected $primaryKey = 'id';

	protected $fillable = [
    	'id',
    	'content',
    	'question_a',
    	'question_b',
    	'question_c',
    	'question_d',
    	'flag_question_a',
    	'flag_question_b',
    	'flag_question_c',
    	'flag_question_d'
    ];
}
