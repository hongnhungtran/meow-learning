<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Topic;
use App\Lesson;
use App\Level;
use App\Course;

class CourseController extends Controller
{
    public function showCourse ($courseId)
    {
        $course = Course::find($courseId)->get();
        $levels = Level::all();
        $lessons = Lesson::where('lesson.course_id', $courseId)
            ->paginate(18);

        return view('user.shared.course', compact('course', 'levels', 'lessons', 'courseId'))
            ->with('i', (request()->input('page', 1) - 1) * 18);
    }

    public function getByLevel ($courseId, $levelId) 
    {
        $course = Course::find($courseId)->get();
        $levels = Level::all();
        $lesson = Lesson::where('lesson.level_id', $levelId)
            ->where('course.course_id', $courseId)
            ->paginate(18);

        return view('user.shared.level', compact('course', 'levels', 'lesson', 'courseId' ))
            ->with('i', (request()->input('page', 1) - 1) * 18);
    }

    public function getByKeyword ()
    {

    }

    public function getLessonList($id)
    {
        $levels = Level::all();
        $course = Course::find($id);
        $lessons = Course::join('lesson','lesson.course_id', '=', 'course.course_id')
            ->paginate(18);

        return view('user.shared.lesson', compact('levels', 'course', 'lessons'))
            ->with('i', (request()->input('page', 1) - 1) * 18);
    }

    public function get_topic_list($id) 
    {
        $topics = Topic::join('level', 'topic.level_id', '=', 'level.level_id')
            ->where('course_id', $this->vocabulary_course_id)
            ->where('topic.level_id', $id)
            ->paginate(10);
        $level = Level::find($id);
        $course = Course::find($this->vocabulary_course_id);
        $num=1;

        return view('user.vocabulary.topicList', compact('topics', 'num', 'level', 'course'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function showLesson($id) 
    {
        $lessons = Lesson::join('topic', 'lesson.topic_id', '=', 'topic.topic_id')
            ->where('topic.topic_id', $id)
            ->paginate(10);
        $level = Level::find($id);
        $topic = Topic::find($id);
        $course = Course::find($this->vocabulary_course_id);
        $num=1;
        return view('user.vocabulary.lessonList', compact('lessons', 'topic', 'level', 'num', 'course'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }
}
