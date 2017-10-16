<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $table = 'lesson';

    protected $primaryKey = 'lesson_id';

    protected $fillable = [
    	'lesson_id',
    	'course_id',
    	'topic_id',
    	'level_id',
	    'lesson_title',
        'lesson_image_link',
        'lesson_flag',
	    'lesson_content'
	];

	public function level()
    {
        return $this->belongsTo('App\Level');
    }
}
