<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Lesson;
use App\Level;
use App\CommonTestQuestion;
use App\CommonTestAnswer;

class CommonTestQuestionController extends Controller
{
    /**
     * Common Test Lesson ID　定義
     */
    public function __construct()
    {
        $this->common_test_course_id = 10;
    }

    /**
     * Common　Test　Question　カスタムリスト
     *
     * @return \Illuminate\Http\Response
     */
    public function index($lesson_id)
    {
        $questions = CommonTestQuestion::where('lesson_id', $lesson_id)
            ->get();

        $lesson = Lesson::find($lesson_id);
        $lesson_title = $lesson->lesson_title;
        $lesson_id = $lesson->lesson_id;

        $num = 1;
        return view('admin.common-test.questionList', compact('questions', 'lesson_title', 'lesson_id', 'num'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($lesson_id)
    {
        return view('admin.common-test.questionAdd', compact('lesson_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $lesson_id)
    {
        request()->validate([
            'common_test_question' => 'required',
            'option_1' => 'required',
            'option_2' => 'required',
            'option_3' => 'required',
            'option_4' => 'required'
        ]);

        $common_test = new CommonTestQuestion([
            'lesson_id' => $lesson_id,
            'common_test_question' => $request->get('common_test_question'),
            'option_1' => $request->get('option_1'),
            'option_2' => $request->get('option_2'),
            'option_3' => $request->get('option_3'),
            'option_4' => $request->get('option_4')
        ]);

        $common_test->save();

        return redirect()->route('common-test.question.index', compact('lesson_id'))
            ->with('status', 'Vocabulary lesson created successfully');
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
    public function edit($lesson_id, $question_id)
    {
        $question = CommonTestQuestion::find($question_id);

        return view('admin.common-test.questionEdit', compact('question_id', 'lesson_id', 'question'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $lesson_id, $question_id)
    {
        request()->validate([
            'common_test_question' => 'required',
            'option_1' => 'required',
            'option_2' => 'required',
            'option_3' => 'required',
            'option_4' => 'required'
        ]);

       CommonTestQuestion::find($question_id)->update([
            'common_test_question' => $request->get('common_test_question'),
            'option_1' => $request->get('option_1'),
            'option_2' => $request->get('option_2'),
            'option_3' => $request->get('option_3'),
            'option_4' => $request->get('option_4')
        ]);

        return redirect()->route('common-test.question.index', compact('lesson_id'))
            ->with('status', 'Lesson updated successfully');
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
