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
    /**
     * Common Test Category ID　定義
     */
    public function __construct()
    {
        $this->common_test_course_id = 10;
    }
    /**
     * Common Test Lesson List　表示
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

    public function searchLesson(Request $request)
    {
        $lesson_id = $request->get('lesson_id');
        $lesson_title = $request->get('lesson_title');
        $lesson_content = $request->get('lesson_content');

        if (isset($lesson_id) || isset($lesson_id) || isset($lesson_id)) {
            $common_tests = Lesson::join('level', 'lesson.level_id', '=', 'level.level_id')
                ->where('course_id', $this->common_test_course_id)
                ->Where('lesson_id', 'LIKE', '%'.$lesson_id.'%')
                ->Where('lesson_title', 'LIKE', '%'.$lesson_title.'%')
                ->Where('lesson_content', 'LIKE', '%'.$lesson_content.'%')
                ->paginate(10);
        }
        
        $levels = Level::all();

        return view('admin.common-test.lessonList', compact('common_tests', 'levels'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Common Test Lesson 作成フォーム表示
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $levels = Level::all();
        
        return view('admin.common-test.lessonAdd', compact('levels'));
    }

    /**
     * Common Test Lesson 作成、DBに書き込む
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
            'lesson_flag' => 1
        ]);

        $common_test->save();

        return redirect()->route('common-test.lesson.index')
            ->with('status', 'Test lesson created successfully');
      }

    /**
     * Common Test　テスト形式表示、Word ダウンロードできる
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
     * Common Test Lesson 情報編集フォーム表示
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
     * Common Test Lesson 更新、DBに書き込む
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

        $lesson = Lesson::find($id)->update([
            'level_id' => (int)$request->get('level'),
            'lesson_title' => $request->get('lesson_title'),
            'lesson_content' => $request->get('lesson_content'),
            'lesson_image_link' => $request->get('lesson_image_link')
        ]);

        return redirect()->route('common-test.lesson.index')
            ->with('status', 'Lesson updated successfully');
    }

    /**
     * Common Test Lesson 非表示
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
