<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Topic;
use App\Lesson;
use App\Level;
use App\Vocabulary;
use App\Course;

class VocabularyController extends Controller
{
    public function __construct()
    {
        $this->vocabulary_course_id = 1;

    }

    public function get_level_list() 
    { 
        $levels = Level::all();
        $courses = Course::all();

        return view('user.vocabulary.levelList', compact('levels', 'courses'));
    }

    public function get_topic_list($id) 
    {
        $topics = Topic::join('level', 'topic.level_id', '=', 'level.level_id')
            ->where('course_id', $this->vocabulary_course_id)
            ->where('topic.level_id', $id)
            ->paginate(10);
        $level = Level::find($id);
        $num=1;

        return view('user.vocabulary.topicList', compact('topics', 'num', 'level'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function get_lesson_list($id) 
    {
        $lessons = Lesson::join('topic', 'lesson.topic_id', '=', 'topic.topic_id')
            ->where('topic.topic_id', $id)
            ->paginate(10);
        var_dump($lessons) ;
exit;
        return view('user.vocabulary.lessonList', compact('lessons'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

}
