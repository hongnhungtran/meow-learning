<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Lesson;
use App\Level;
use App\CommonTestQuestion;
use App\CommonTestAnswer;

class CommonTestController extends Controller
{
    public function __construct()
    {

        $this->course_id = 10;

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $common_tests = Lesson::join('level', 'lesson.level_id', '=', 'level.level_id')
            ->where('course_id', $this->course_id)
            ->paginate(10);
        $levels = Level::all();

        return view('admin.common-test.commonTestList', compact('common_tests', 'levels'))
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
        
        return view('admin.common-test.commonTestAdd', compact('levels'));
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
            'common_test_question[]' => 'required',
            'answer_a' => 'required',
            'answer_b' => 'required',
            'answer_c' => 'required',
            'answer_d' => 'required'
        ]);

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


        $answer_a = $request->input('answer_a');
          for($i=0;$i<count($answer_a);$i++){
            $answer_a = new CommonTestAnswer([
              'common_test_answer' => $answers[$i],
              'common_test_question_id' => $question->id,
              'correct' => ($request->input('Answer_chk')[0]) == ($i+1) ? 1:0
            ]);
              $answer->save();
          }
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
    public function update(Request $request, $id)
    {
        //
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
