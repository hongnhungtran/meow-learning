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

    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function vocabulary_management()
    {
        return view('admin.vocabulary.management');
    }
    
    /**
     * [vocabulary_topic_api description]
     * @return [type] [description]
     */
    
    public function vocabulary_topic_api()
    {
         $vocabulary_topic = VocabularyTopic::paginate(10);

        if (!$vocabulary_topic) {
            throw new HttpException(400, "Invalid data");
        }

        return response()->json(
            $vocabulary_topic,
            200
        );
    }

    /**
     * [vocabulary_lesson_api description]
     * @return [type] [description]
     */
    public function vocabulary_lesson_api()
    {
         $vocabulary_lesson = VocabularyLesson::paginate(10);

        if (!$vocabulary_lesson) {
            throw new HttpException(400, "Invalid data");
        }

        return response()->json(
            $vocabulary_lesson,
            200
        );
    }

    /**
     *  Get Vocabulary Topic List
     * @return [type] [description]
     */
    public function vocabulary_topic_index()
    {
        $vocabulary_topics = Topic::where('course_id', $this->vocabulary_course_id)->paginate(10);
        
        return view('admin.vocabulary.topicList', compact('vocabulary_topics'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     *  Get vocabulary topic create view
     * @return [type] [description]
     */
    public function vocabulary_topic_create()
    {
        $levels = Level::all();
        
        return view('admin.vocabulary.topicAdd', compact('levels'));
    }

    /**
     *  
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function vocabulary_topic_store(Request $request)
    {
        request()->validate([
            'topic_title' => 'required',
            'topic_content' => 'required',
        ]);

        Topic::create($request->all());

        return redirect()->route('vocabulary.topic.list')
            ->with('success', 'Topic created successfully');
    }

    public function vocabulary_topic_show()
    {
    }

    /**
     * [vocabulary_topic_edit description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function vocabulary_topic_edit($id)
    {
        $levels = Level::all();
        $vocabulary_topic = Topic::find($id);

        return view('admin.vocabulary.topicEdit', compact('vocabulary_topic', 'levels'));
    }

    /**
     * [vocabulary_topic_update description]
     * @param  Request $request [description]
     * @param  [type]  $id      [description]
     * @return [type]           [description]
     */
    public function vocabulary_topic_update(Request $request, $id)
    {

        request()->validate([
            'topic_title' => 'required',
            'topic_content' => 'required',
        ]);

        Topic::find($id)->update($request->all());

        return redirect()->route('vocabulary.topic.list')
            ->with('success', 'Topic updated successfully');
    }

    /**
     * [vocabulary_topic_destroy description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function vocabulary_topic_destroy($id)
    {
        Topic::find($id)->delete();
        return redirect()->route('vocabulary.topic.list')
            ->with('success', 'Topic deleted successfully');
    }


    public function vocabulary_lesson_index()
    {
        $vocabulary_lessons = Lesson::where('course_id', 1)->paginate(10);
        
        return view('admin.vocabulary.topicList', compact('vocabulary_topics'))
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
