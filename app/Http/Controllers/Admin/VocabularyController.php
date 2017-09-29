<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Topic;
use App\Lesson;
use App\Level;

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
        $vocabulary_topics = Topic::where('course_id', $this->vocabulary_course_id)->paginate(10);
        
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
        $vocabulary_topic = $this->validate(request(), [
            'topic_title' => 'required|unique:topic',
            'topic_content' => 'required|unique:topic'
        ]);

        $vocabulary_topic = $request->get('level');
/*$crud = new Crud([
          'title' => $request->get('title'),
          'post' => $request->get('post')
        ]);

        $crud->save();*/
var_dump($vocabulary_topic);
exit;
        Topic::create($vocabulary_topic);

        return redirect()->route('vocabulary-topic-list')
            ->with('status', 'Topic created successfully');
    }

    public function vocabulary_topic_show()
    {
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
        ]);

        Topic::find($id)->update($request->all());

        return redirect()->route('vocabulary-topic-list')
            ->with('success', 'Topic updated successfully');
    }

    public function vocabulary_topic_destroy($id)
    {
        Topic::find($id)->delete();
        return redirect()->route('vocabulary-topic-list')
            ->with('success', 'Topic deleted successfully');
    }


    public function vocabulary_lesson_index()
    {
        $vocabulary_lessons = Lesson::where('course_id', $this->vocabulary_course_id)->paginate(10);
        
        return view('admin.vocabulary.lessonList', compact('vocabulary_lessons'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function vocabulary_lesson_create()
    {

    }

    public function vocabulary_lesson_store()
    {
    }

    public function vocabulary_lesson_show()
    {
    }

    public function vocabulary_lesson_edit()
    {
    }

    public function vocabulary_lesson_update()
    {
    }

     public function vocabulary_lesson_destroy($id)
    {
       
    }

}