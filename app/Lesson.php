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
        $this->vocabulary_course_id = 1;
        $this->listening_course_id = 2;
        $this->speaking_course_id = 3;
        $this->reading_course_id = 4;
        $this->writing_course_id = 5;
    }
    
	public function level()
    {
        return $this->belongsTo('App\Level');
    }

    public function get_vocabulary_lesson()
    {
        $vocabulary_lessons = Lesson::join('level', 'lesson.level_id', '=', 'level.level_id')
            ->where('course_id', $this->vocabulary_course_id);

        return $vocabulary_lessons;
    }

    public function get_writing_lesson()
    {
        $writing_lessons = Lesson::join('level', 'lesson.level_id', '=', 'level.level_id')
            ->where('course_id', $this->writing_course_id);

        return $writing_lessons;
    }

    public function get_speaking_lesson()
    {
        $writing_lessons = Lesson::join('level', 'lesson.level_id', '=', 'level.level_id')
            ->where('course_id', $this->writing_course_id);

        return $writing_lessons;
    }

    public function get_listening_lesson()
    {
        $listening_lessons = Lesson::join('level', 'lesson.level_id', '=', 'level.level_id')
            ->where('course_id', $this->listening_course_id);

        return $listening_lessons;
    }

    public function get_reading_lesson()
    {
        $reading_lessons = Lesson::join('level', 'lesson.level_id', '=', 'level.level_id')
            ->where('course_id', $this->reading_course_id);

        return $reading_lessons;
    }
}
