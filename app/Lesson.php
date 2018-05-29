<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Config;

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

    public function get_vocabulary_lesson()
    {
        $vocabulary_course_id = Config::get('constants.course.vocabulary');
        $vocabulary_lessons = Lesson::join('level', 'lesson.level_id', '=', 'level.level_id')
            ->where('course_id', $vocabulary_course_id);
        return $vocabulary_lessons;
    }

    public function get_writing_lesson()
    {
        $writing_course_id = Config::get('constants.course.writing');
        $writing_lessons = Lesson::join('level', 'lesson.level_id', '=', 'level.level_id')
            ->where('course_id', $writing_course_id);
        return $writing_lessons;
    }

    public function get_speaking_lesson()
    {
        $speaking_course_id = Config::get('constants.course.speaking');
        $writing_lessons = Lesson::join('level', 'lesson.level_id', '=', 'level.level_id')
            ->where('course_id', $speaking_course_id);
        return $writing_lessons;
    }

    public function get_listening_lesson()
    {
        $listening_course_id = Config::get('constants.course.listening');
        $listening_lessons = Lesson::join('level', 'lesson.level_id', '=', 'level.level_id')
            ->where('course_id', $listening_course_id);
        return $listening_lessons;
    }

    public function get_reading_lesson()
    {
        $reading_course_id = Config::get('constants.course.reading');
        $reading_lessons = Lesson::join('level', 'lesson.level_id', '=', 'level.level_id')
            ->where('course_id', $reading_course_id);
        return $reading_lessons;
    }

    public function get_toefl_lesson()
    {
        $toefl_course_id = Config::get('constants.course.toefl');
        $toefl_lessons = Lesson::join('level', 'lesson.level_id', '=', 'level.level_id')
            ->where('course_id', $toefl_course_id);
        return $toefl_lessons;
    }

    public function get_toeic_lesson()
    {
        $toeic_course_id = Config::get('constants.course.toeic');
        $toeic_lessons = Lesson::join('level', 'lesson.level_id', '=', 'level.level_id')
            ->where('course_id', $toeic_course_id);
        return $toeic_lessons;
    }

        public function get_eilts_lesson()
    {
        $eilts_course_id = Config::get('constants.course.eilts');
        $eilts_lessons = Lesson::join('level', 'lesson.level_id', '=', 'level.level_id')
            ->where('course_id', $eilts_course_id);
        return $eilts_lessons;
    }

    public function get_common_test_lesson()
    {
        $common_test_course_id = Config::get('constants.course.common-test');
        $common_test_lessons = Lesson::join('level', 'lesson.level_id', '=', 'level.level_id')
            ->where('course_id', $common_test_course_id);
        return $common_test_lessons;
    }
}
