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

    public function topic()
    {
        return $this->belongsTo('App\Topic');
    }

    public function getVocabularyLesson()
    {
        $vocabulary_course_id = Config::get('constants.course.vocabulary');
        $vocabulary_lessons = Lesson::join('topic', 'lesson.topic_id', '=', 'topic.topic_id')
            ->join('level', 'topic.level_id', '=', 'level.level_id')
            ->where('lesson.course_id', $vocabulary_course_id);
        return $vocabulary_lessons;
    }

    public function findVocabularyLesson($id)
    {
        $vocabulary_course_id = Config::get('constants.course.vocabulary');
        $vocabulary_lessons = Lesson::join('topic', 'lesson.topic_id', '=', 'topic.topic_id')
            ->join('level', 'topic.level_id', '=', 'level.level_id')
            ->where('lesson.course_id', $vocabulary_course_id)
            ->where('lesson.lesson_id', $id);
        return $vocabulary_lessons;
    }

    public function getWritingLesson()
    {
        $writing_course_id = Config::get('constants.course.writing');
        $writing_lessons = Lesson::join('topic', 'lesson.topic_id', '=', 'topic.topic_id')
            ->join('level', 'topic.level_id', '=', 'level.level_id')
            ->where('lesson.course_id', $writing_course_id);
        return $writing_lessons;
    }

    public function getSpeakingLesson()
    {
        $speaking_course_id = Config::get('constants.course.speaking');
        $writing_lessons = Lesson::join('topic', 'lesson.topic_id', '=', 'topic.topic_id')
            ->join('level', 'topic.level_id', '=', 'level.level_id')
            ->where('lesson.course_id', $speaking_course_id);
        return $writing_lessons;
    }

    public function getListeningLesson()
    {
        $listening_course_id = Config::get('constants.course.listening');
        $listening_lessons = Lesson::join('topic', 'lesson.topic_id', '=', 'topic.topic_id')
            ->join('level', 'topic.level_id', '=', 'level.level_id')
            ->where('lesson.course_id', $listening_course_id);
        return $listening_lessons;
    }

    public function getReadingLesson()
    {
        $reading_course_id = Config::get('constants.course.reading');
        $reading_lessons = Lesson::join('topic', 'lesson.topic_id', '=', 'topic.topic_id')
            ->join('level', 'topic.level_id', '=', 'level.level_id')
            ->where('lesson.course_id', $reading_course_id);
        return $reading_lessons;
    }

    public function getToeflLesson()
    {
        $toefl_course_id = Config::get('constants.course.toefl');
        $toefl_lessons = Lesson::join('topic', 'lesson.topic_id', '=', 'topic.topic_id')
            ->join('level', 'topic.level_id', '=', 'level.level_id')
            ->where('lesson.course_id', $toefl_course_id);
        return $toefl_lessons;
    }

    public function getToeicLesson()
    {
        $toeic_course_id = Config::get('constants.course.toeic');
        $toeic_lessons = Lesson::join('topic', 'lesson.topic_id', '=', 'topic.topic_id')
            ->join('level', 'topic.level_id', '=', 'level.level_id')
            ->where('lesson.course_id', $toeic_course_id);
        return $toeic_lessons;
    }

        public function getEiltsLesson()
    {
        $eilts_course_id = Config::get('constants.course.eilts');
        $eilts_lessons = Lesson::join('topic', 'lesson.topic_id', '=', 'topic.topic_id')
            ->join('level', 'topic.level_id', '=', 'level.level_id')
            ->where('lesson.course_id', $eilts_course_id);
        return $eilts_lessons;
    }

    public function getCommonTestLesson()
    {
        $common_test_course_id = Config::get('constants.course.common-test');
        $common_test_lessons = Lesson::join('topic', 'lesson.topic_id', '=', 'topic.topic_id')
            ->join('level', 'topic.level_id', '=', 'level.level_id')
            ->where('lesson.course_id', $common_test_course_id);
        return $common_test_lessons;
    }

    public function search($input)
    {
        $query = $this->getVocabularyQuery();

        if ($input['topic_id'] !== null) {
            $query->where('lesson.topic_id', 'LIKE', $input['topic_id']);
        }
        if ($input['level_id'] !== null) {
            $query->where('level.level_id', 'LIKE', $input['level_id']);
        }
        if ($input['lesson_id'] !== null) {
            $query->where('lesson.lesson_id', 'LIKE', $input['lesson_id']);
        }
        if ($input['lesson_title'] !== null) {
            $query->where('lesson.lesson_title', 'LIKE', '%'.$input['lesson_title'].'%');
        }
        if ($input['lesson_flag'] === 1) {
            $query->where('lesson.lesson_flag', 'LIKE', '1');
        }
        if ($input['lesson_flag'] === 0) {
            $query->where('lesson.lesson_flag', 'LIKE', '0');
        }
        if ($input['lesson_flag'] === 3) {
            $query;
        }
        return $query;
        dd($query);exit;
    }

    public function getVocabularyQuery()
    {
        $vocabulary_course_id = Config::get('constants.course.vocabulary');
        $vocabulary = Lesson::join('topic', 'topic.topic_id', 'lesson.topic_id')
            ->join('level', 'topic.level_id', '=', 'level.level_id')
            ->where('lesson.course_id', $vocabulary_course_id)
            ->select(
                'lesson.lesson_id',
                'lesson.topic_id',
                'lesson.lesson_title',
                'lesson.lesson_content',
                'lesson.lesson_image_link',
                'lesson.lesson_flag',
                'topic.topic_title',
                'topic.level_id',
                'level.level_name'
            );
        return $vocabulary;
    }
}
