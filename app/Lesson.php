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

    public function __construct()
    {
        $this->writing_course_id = 5;
    }
    
	public function level()
    {
        return $this->belongsTo('App\Level');
    }

    public function get_writing_lesson()
    {
        $writing_lessons = Lesson::join('level', 'lesson.level_id', '=', 'level.level_id')
            ->where('course_id', $this->writing_course_id);

        return $writing_lessons;
    }
}
