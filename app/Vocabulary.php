<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vocabulary extends Model
{
    protected $table = 'vocabulary';

    protected $primaryKey = 'vocabulary_id';

    protected $fillable = [
    	'vocabulary',
    	'lesson_id',
    	'image_link',
    	'audio_link'
    ];

}
