<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Topic extends Model
{
    use Searchable;

    protected $table = 'topic';

    protected $primaryKey = 'topic_id';

    protected $fillable = [
    	'topic_id',
    	'course_id',
    	'level_id',
	    'topic_title',
        'topic_image_link',
	    'topic_content'
    ];

	public function level()
    {
        return $this->belongsTo('App\Level');
    }

    public function searchableAs()
    {
        return 'items_index';
    }

    public function get_vocabulary_topic()
    {
        $vocabulary_course_id = Config::get('constants.course.vocabulary');
        $vocabulary_topics = Topic::where('course_id', $vocabulary_course_id);
        return $vocabulary_topics;
    }

    public function get_writing_topic()
    {
        $writing_course_id = Config::get('constants.course.writing');
        $writing_topics = Lesson::where('course_id', $writing_course_id);
        return $writing_topics;
    }

    public function get_speaking_topic()
    {
        $speaking_course_id = Config::get('constants.course.speaking');
        $writing_topics = Lesson::where('course_id', $speaking_course_id);
        return $writing_topics;
    }

    public function get_listening_topic()
    {
        $listening_course_id = Config::get('constants.course.listening');
        $listening_topics = Lesson::where('course_id', $listening_course_id);

        return $listening_topics;
    }

    public function get_reading_topic()
    {
        $reading_course_id = Config::get('constants.course.reading');
        $reading_topics = Lesson::where('course_id', $reading_course_id);

        return $reading_topics;
    }

    public function get_toefl_topic()
    {
        $toefl_course_id = Config::get('constants.course.toefl');
        $toefl_lessons = Lesson::where('course_id', $toefl_course_id);

        return $toefl_topics;
    }

    public function get_toeic_topic()
    {
        $toeic_course_id = Config::get('constants.course.toeic');
        $toeic_lessons = Lesson::where('course_id', $toeic_course_id);

        return $toeic_topics;
    }

        public function get_eilts_topic()
    {
        $eilts_course_id = Config::get('constants.course.eilts');
        $eilts_lessons = Lesson::where('course_id', $eilts_course_id);

        return $eilts_topics;
    }

    public function get_common_test_topic()
    {
        $common_test_course_id = Config::get('constants.course.common-test');
        $common_test_topics = Lesson::where('course_id', $common_test_course_id);

        return $common_test_topics;
    }
}
