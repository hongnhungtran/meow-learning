<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Config;

class Vocabulary extends Model
{
    protected $table = 'vocabulary';
    protected $primaryKey = 'vocabulary_id';
    protected $fillable = [
    	'lesson_id',
    	'vocabulary',
    	'vocabulary_image_link',
    	'vocabulary_audio_link'
    ];

    public function getVocabulary($id)
    {
        $vocabulary = Vocabulary::join('lesson', 'lesson.lesson_id', '=', 'vocabulary.lesson_id')
            ->where('vocabulary.lesson_id', $id);
        return $vocabulary;
    }

}
