<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VocabularyLesson extends Model
{
    public function vocabularyTopic()
	{
	    return $this->belongsTo('App\VocabularyTopic');

	    protected $table = 'vocabulary_lesson';
	}
}
