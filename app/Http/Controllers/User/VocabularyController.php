<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VocabularyController extends Controller
{
    public function __construct()
    {
        $this->vocabulary_course_id = 1;

    }

    public function get_level_list() 
    {      
        return view('user.vocabulary.levelList');
    }

    public function get_topic_list() 
    {
        $topics = Topic::join('level', 'topic.level_id', '=', 'level.level_id')
            ->where('course_id', $this->vocabulary_course_id)
            ->paginate(10);
        
        return view('user.vocabulary.topicList', compact('vocabulary_topics'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function get_lesson_list() 
    {
        $topics = Topic::join('level', 'topic.level_id', '=', 'level.level_id')
            ->where('course_id', $this->vocabulary_course_id)
            ->paginate(10);
        
        return view('user.vocabulary.lessonList', compact('vocabulary_topics'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }



}
