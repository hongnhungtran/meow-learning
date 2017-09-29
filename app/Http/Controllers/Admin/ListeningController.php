<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Topic;
use App\Lesson;
use App\Level;

class ListeningController extends Controller
{
    public function __construct()
    {
        $this->listening_course_id = 2;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listening_lessons = Lesson::join('level', 'lesson.level_id', '=', 'level.level_id')
            ->where('course_id', $this->listening_course_id)
            ->paginate(10);
        
        return view('admin.listening.lessonList', compact('listening_lessons'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $levels = Level::all();
        
        return view('admin.vocabulary.lessonAdd', compact('levels'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'lesson_title' => 'required|unique:lesson',
            'lesson_content' => 'required|unique:lesson',
            'image_link' => 'required|unique:lesson'
        ]);

        $listening_lesson = new Lesson([
            'course_id' => $this->vocabulary_course_id,
            'level_id' => (int)$request->get('level'),
            'lesson_title' => $request->get('lesson_title'),
            'lesson_content' => $request->get('lesson_content'),
            'image_link' => $request->get('image_link'),
        ]);

        $listening_lesson->save();

        return redirect()->route('listening-lesson-list')
            ->with('status', 'Listening lesson created successfully');
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
        $levels = Level::all();
        $listening_lesson = Lesson::find($id);

        return view('admin.listening.lessonEdit', compact('listening_lesson', 'levels', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate([
            'lesson_title' => 'required',
            'lesson_content' => 'required',
            'image_link' => 'required',
        ]);

        $listening_lesson = Lesson::find($id);
        $listening_lesson->level_id = (int)$request->get('level');
        $listening_lesson->lesson_title = $request->get('lesson_title');
        $listening_lesson->lesson_content = $request->get('lesson_content');
        $listening_lesson->image_link = $request->get('image_link');
        $listening_lesson->save();

        return redirect()->route('listening-lesson-list')
            ->with('status', 'Vocabulary lesson updated successfully');
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
}
