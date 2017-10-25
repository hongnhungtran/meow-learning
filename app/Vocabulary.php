<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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

}
