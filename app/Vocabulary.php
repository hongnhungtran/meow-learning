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
        'pronunciation',
    	'vocabulary_image_link',
    	'vocabulary_audio_link',
        'vocabulary_status',
    ];

    public function getVocabulary($id)
    {
        $vocabulary = Vocabulary::join('lesson', 'lesson.lesson_id', '=', 'vocabulary.lesson_id')
            ->where('vocabulary.lesson_id', $id);
        return $vocabulary;
    }

    public function saveVocabulary($id, $input)
    {
        $vocabulary = [
            'lesson_id' => $id,
            'vocabulary' => $request->get('vocabulary'),
            'pronunciation' => $request->get('pronunciation'),
            'lesson_image_link' => $request->get('lesson_image_link'),
            'vocabulary_audio_link' => $request->get('audio'),
            'vocabulary_status' => $request->get('lesson_flag'),
        ];
        
        $vocabulary->save();
    }
}
