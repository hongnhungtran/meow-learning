<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Config;

class Topic extends Model
{
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

    public function lesson()
    {
        return $this->hasMany('App\Lesson');
    }

    public function searchableAs()
    {
        return 'items_index';
    }

    public function getVocabularyTopic()
    {
        $vocabulary_course_id = Config::get('constants.course.vocabulary');
        $vocabulary_topics = Topic::where('topic.course_id', $vocabulary_course_id)->get();
        return $vocabulary_topics;
    }

    public function getWritingTopic()
    {
        $writing_course_id = Config::get('constants.course.writing');
        $writing_topics = Topic::where('course_id', $writing_course_id)->get();
        return $writing_topics;
    }

    public function getSpeakingTopic()
    {
        $speaking_course_id = Config::get('constants.course.speaking');
        $writing_topics = Topic::where('course_id', $speaking_course_id)->get();
        return $writing_topics;
    }

    public function getListeningTopic()
    {
        $listening_course_id = Config::get('constants.course.listening');
        $listening_topics = Topic::where('course_id', $listening_course_id)->get();

        return $listening_topics;
    }

    public function getReadingTopic()
    {
        $reading_course_id = Config::get('constants.course.reading');
        $reading_topics = Topic::where('course_id', $reading_course_id)->get();

        return $reading_topics;
    }

    public function getToeflTopic()
    {
        $toefl_course_id = Config::get('constants.course.toefl');
        $toefl_lessons = Topic::where('course_id', $toefl_course_id)->get();

        return $toefl_topics;
    }

    public function getToeicTopic()
    {
        $toeic_course_id = Config::get('constants.course.toeic');
        $toeic_lessons = Topic::where('course_id', $toeic_course_id)->get();

        return $toeic_topics;
    }

        public function getEiltsTopic()
    {
        $eilts_course_id = Config::get('constants.course.eilts');
        $eilts_lessons = Topic::where('course_id', $eilts_course_id)->get();

        return $eilts_topics;
    }

    public function getCommonTestTopic()
    {
        $common_test_course_id = Config::get('constants.course.common-test');
        $common_test_topics = Topic::where('course_id', $common_test_course_id)->get();

        return $common_test_topics;
    }
}
