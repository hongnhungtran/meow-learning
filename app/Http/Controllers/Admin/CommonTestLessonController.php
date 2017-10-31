<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Lesson;
use App\Level;
use App\CommonTestQuestion;
use App\CommonTestAnswer;

class CommonTestLessonController extends Controller
{
    public function __construct()
    {
        $this->common_test_course_id = 10;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $common_tests = Lesson::join('level', 'lesson.level_id', '=', 'level.level_id')
        ->where('course_id', $this->common_test_course_id)
        ->paginate(10);

        $levels = Level::all();

        return view('admin.common-test.lessonList', compact('common_tests', 'levels'))
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
        
        return view('admin.common-test.lessonAdd', compact('levels'));
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
            'lesson_image_link' => 'required|unique:lesson'
        ]);

        $common_test = new Lesson([
            'course_id' => $this->common_test_course_id,
            'level_id' => (int)$request->get('level'),
            'lesson_title' => $request->get('lesson_title'),
            'lesson_content' => $request->get('lesson_content'),
            'lesson_image_link' => $request->get('lesson_image_link'),
        ]);

        $common_test->save();

        return redirect()->route('common-test.lesson.index')
            ->with('status', 'Test lesson created successfully');
      }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //question content
        $questions = CommonTestQuestion::where('lesson_id', $id)
            ->get();

        //lesson
        $lesson = Lesson::find($id);
        $lesson_title = $lesson->lesson_title;
        $lesson_id = $lesson->lesson_id;

        //question number
        $num = 1;

        return view('admin.common-test.testShow', compact('lesson_title', 'lesson_id','num', 'questions'));
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

        $common_test = Lesson::find($id);

        return view('admin.common-test.lessonEdit', compact('common_test', 'levels', 'id'));
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
            'lesson_image_link' => 'required',
        ]);

        Lesson::find($id)->update([
            'level_id' => (int)$request->get('level'),
            'lesson_title' => $request->get('lesson_title'),
            'lesson_content' => $request->get('lesson_content'),
            'lesson_image_link' => $request->get('lesson_image_link')
        ]);

        return redirect()->route('common-test.lesson.index')
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
