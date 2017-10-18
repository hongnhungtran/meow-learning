<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Topic;
use App\Lesson;
use App\Level;
use App\Vocabulary;

class VocabularyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {

        $this->vocabulary_course_id = 1;

    }

    public function vocabulary_topic_api()
    {
        $vocabulary_topic = Topic::where('course_id', $this->vocabulary_course_id)->paginate(10);

        if (!$vocabulary_topic) {
            throw new HttpException(400, "Invalid data");
        }

        return response()->json(
            $vocabulary_topic,
            200
            );
    }

    public function vocabulary_topic_current_api($id)
    {
        if (!$id) {
         throw new HttpException(400, "Invalid id");
     }

     $book = Topic::find($id);

     return response()->json([
        $book,
        ], 200);
 }

 public function vocabulary_lesson_api()
 {
   $vocabulary_lesson = Lesson::paginate(10);

   if (!$vocabulary_lesson) {
    throw new HttpException(400, "Invalid data");
}

return response()->json(
    $vocabulary_lesson,
    200
    );
}

public function vocabulary_lesson_current_api($id)
{
    if (!$id) {
     throw new HttpException(400, "Invalid id");
 }

 $book = Topic::find($id);

 return response()->json([
    $book,
    ], 200);
}

public function vocabulary_topic_index()
{
    $vocabulary_topics = Topic::join('level', 'topic.level_id', '=', 'level.level_id')
    ->where('course_id', $this->vocabulary_course_id)
    ->paginate(10);

    return view('admin.vocabulary.topicList', compact('vocabulary_topics'))
    ->with('i', (request()->input('page', 1) - 1) * 10);
}

public function vocabulary_topic_create()
{
    $levels = Level::all();

    return view('admin.vocabulary.topicAdd', compact('levels'));
}

public function vocabulary_topic_store(Request $request)
{
    request()->validate([
        'topic_title' => 'required|unique:topic',
        'topic_content' => 'required|unique:topic',
        'topic_image_link' => 'required|unique:topic'
        ]);

    $vocabulary_topic = new Topic([
        'course_id' => $this->vocabulary_course_id,
        'level_id' => (int)$request->get('level'),
        'topic_title' => $request->get('topic_title'),
        'topic_content' => $request->get('topic_content'),
        'topic_image_link' => $request->get('topic_image_link'),

        ]);

    $vocabulary_topic->save();

    return redirect()->route('vocabulary-topic-list')
    ->with('status', 'Vocabulary topic created successfully');
}

public function vocabulary_topic_show($id)
{
    $vocabulary_lessons = Lesson::join('level', 'lesson.level_id', '=', 'level.level_id')
    ->where('topic_id', $id)
    ->paginate(10);    

    return view('admin.vocabulary.lessonList', compact('vocabulary_lessons'))
    ->with('i', (request()->input('page', 1) - 1) * 10);
}

public function vocabulary_topic_edit($id)
{
    $levels = Level::all();

    $vocabulary_topic = Topic::find($id);

    return view('admin.vocabulary.topicEdit', compact('vocabulary_topic', 'levels', 'id'));
}

public function vocabulary_topic_update(Request $request, $id)
{

    request()->validate([
        'topic_title' => 'required',
        'topic_content' => 'required',
        'topic_image_link' => 'required',
        ]);

    $vocabulary_topic = Topic::find($id);
    $vocabulary_topic->level_id = (int)$request->get('level');
    $vocabulary_topic->topic_title = $request->get('topic_title');
    $vocabulary_topic->topic_content = $request->get('topic_content');
    $vocabulary_topic->topic_image_link = $request->get('topic_image_link');
    $vocabulary_topic->save();

    return redirect()->route('vocabulary-topic-list')
    ->with('status', 'Vocabulary topic updated successfully');
}

public function vocabulary_topic_destroy($id)
{
    Topic::find($id)->delete();
    return redirect()->route('vocabulary-topic-list')
    ->with('success', 'Topic deleted successfully');
}

public function vocabulary_lesson_index()
{
    $vocabulary_lessons = Lesson::join('level', 'lesson.level_id', '=', 'level.level_id')
    ->where('course_id', $this->vocabulary_course_id)
    ->paginate(10);

    return view('admin.vocabulary.lessonList', compact('vocabulary_lessons'))
    ->with('i', (request()->input('page', 1) - 1) * 10);
}

public function vocabulary_lesson_create()
{
    $levels = Level::all();
    $topics = Topic::where('course_id', $this->vocabulary_course_id)
    ->get();

    return view('admin.vocabulary.lessonAdd', compact('levels', 'topics'));
}

public function vocabulary_lesson_store(Request $request)
{
    $a = request()->validate(
        ['lesson_title' => 'required|unique:lesson'],
        ['lesson_content' => 'required|unique:lesson'],
        ['lesson_image_link' => 'required|unique:lesson']
        );

    $vocabulary_lesson = new Lesson([
        'course_id' => $this->vocabulary_course_id,
        'level_id' => (int)$request->get('level'),
        'topic_id' => (int)$request->get('topic'),
        'lesson_title' => $request->get('lesson_title'),
        'lesson_content' => $request->get('lesson_content'),
        'lesson_image_link' => $request->get('lesson_image_link'),
        ]);

    $vocabulary_lesson->save();

    return redirect()->route('vocabulary-lesson-list')
    ->with('status', 'Vocabulary lesson created successfully');
}

public function vocabulary_lesson_show($id)
{

}

public function vocabulary_lesson_edit($id)
{
    $levels = Level::all();

    $topics = Topic::where('course_id', $this->vocabulary_course_id)
    ->get();

    $vocabulary_lesson = Lesson::find($id);

    return view('admin.vocabulary.lessonEdit', compact('vocabulary_lesson', 'levels', 'id', 'topics'));
}

public function vocabulary_lesson_update(Request $request, $id)
{
    request()->validate([
        'lesson_title' => 'required',
        'lesson_content' => 'required',
        'lesson_image_link' => 'required',
        ]);

    $vocabulary_lesson = Lesson::find($id);
    $vocabulary_lesson->level_id = (int)$request->get('level');
    $vocabulary_lesson->topic_id = (int)$request->get('topic');
    $vocabulary_lesson->lesson_title = $request->get('lesson_title');
    $vocabulary_lesson->lesson_content = $request->get('lesson_content');
    $vocabulary_lesson->lesson_image_link = $request->get('lesson_image_link');
    $vocabulary_lesson->save();

    return redirect()->route('vocabulary-lesson-list')
    ->with('status', 'Vocabulary lesson updated successfully');
}

public function vocabulary_lesson_destroy($id)
{

}

public function vocabulary_exercise_index($id)
{
    $vocabularies = Vocabulary::join('lesson', 'lesson.lesson_id', '=', 'vocabulary.lesson_id')
    ->where('vocabulary.lesson_id', $id)
    ->get();

    return view('admin.vocabulary.vocabularyList', compact('vocabularies'));
}

public function vocabulary_exercise_create($id)
{        
    $vocabulary_lesson = Lesson::find($id);
    $num = 1;
    $vocabulary ="vocabulary"; 
    return view('admin.vocabulary.vocabularyAdd', compact('vocabulary_lesson', 'id', 'num', 'vocabulary'));
}

    public function vocabulary_exercise_store($id, Request $request)
    {
            //get input value
        $vocabulary = new Vocabulary([
            'lesson_id' => (int)$id,
            'vocabulary' => $request->get('vocabulary'),
            'vocabulary_image_link' => $request->get('vocabulary_image_link'),
            'vocabulary_audio_link' => $request->get('vocabulary_audio_link') 
        ]);

            //validate
        $this->validate($request, [
            'vocabulary.*' => 'required',
            'vocabulary_image_link.*' => 'required|unique:vocabulary',
            'vocabulay_audio_link.*' => 'required|unique:vocabulary'
        ]);

            //insert to DB
        for($i = 0; $i < 10; $i++){
            $values = new Vocabulary;
            $values->lesson_id = $vocabulary['lesson_id'];
            $values->vocabulary = $vocabulary['vocabulary'][$i];
            $values->vocabulary_image_link = $vocabulary['vocabulary_image_link'][$i];
            $values->vocabulary_audio_link = $vocabulary['vocabulary_audio_link'][$i];

            $values->save();
        }


        return redirect()->route('vocabulary-exercise-index', compact('id'))
        ->with('status', 'Vocabulary lesson created successfully');
    }

public function vocabulary_exercise_show()
{

}

public function vocabulary_exercise_edit()
{

}

public function vocabulary_exercise_update()
{

}

public function vocabulary_exercise_destroy()
{

}

}