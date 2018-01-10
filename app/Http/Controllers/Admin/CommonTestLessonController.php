<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Lesson;
use App\Level;
use App\CommonTestQuestion;
use App\CommonTestAnswer;
use Storage;
use File;
use Session;

class CommonTestLessonController extends Controller
{
    protected $lesson;
    protected $level;
    /**
     * Common Test Category ID　定義
     */
    public function __construct(
        Lesson $lesson,
        Level $level
    ) {
        $this->common_test_course_id = 10;
        $this->lesson = $lesson;
        $this->level = $level;
    }
    /**
     * Common Test Lesson List　表示
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $lesson = new Lesson;
        $common_tests = $this->lesson->get_common_test_lesson()->paginate(10);
        $levels = $this->level->get_level();

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
        //If has image file -> validate
        if($request->upload_image != "") {
            request()->validate([
                'lesson_title' => 'required|unique:lesson',
                'lesson_content' => 'required|unique:lesson'
            ]);
        } else {
            request()->validate([
                'lesson_title' => 'required|unique:lesson',
                'lesson_content' => 'required|unique:lesson',
                'lesson_image_link' => 'required|unique:lesson'
            ]);
        }

        //get file information
        $file = $request->file('upload_image');

        if($request->hasFile('upload_image') && empty($request->get('lesson_image_link'))){
            //Upload image file
            //foreach ($files as $file) {
            $filename = $file->getClientOriginalName();
            $disk = Storage::disk('google'); 
            $result = $disk->put($filename, File::get($file));

            $dir = '/';
            $recursive = false; // Get subdirectories also?
            $contents = collect(Storage::cloud()->listContents($dir, $recursive));

            $image = $contents
                ->where('type', '=', 'file')
                ->where('filename', '=', pathinfo($filename, PATHINFO_FILENAME))
                ->where('extension', '=', pathinfo($filename, PATHINFO_EXTENSION))
                ->first(); // there can be duplicate file names!

            //Create image link
            $lesson_image_link = "https://drive.google.com/uc?export=view&id=".$image['path'];
            
            //Insert to DB
            $common_test = new Lesson([
                'course_id' => $this->common_test_course_id,
                'level_id' => (int)$request->get('level'),
                'lesson_title' => $request->get('lesson_title'),
                'lesson_content' => $request->get('lesson_content'),
                'lesson_image_link' => $lesson_image_link ,
                'lesson_flag' => 1
            ]);
            var_dump($common_test) ;
exit;
            $common_test->save();
            //}
        } elseif ($request->hasFile('upload_image') === false && !empty($request->get('lesson_image_link'))) {
            $common_test = new Lesson([
                'course_id' => $this->common_test_course_id,
                'level_id' => (int)$request->get('level'),
                'lesson_title' => $request->get('lesson_title'),
                'lesson_content' => $request->get('lesson_content'),
                'lesson_image_link' => $request->get('lesson_image_link'),
                'lesson_flag' => 1
            ]);
            $common_test->save();
        } elseif($request->hasFile('upload_image') && !empty($request->get('lesson_image_link'))){
            Session::flash('status', 'Only upload by input link or select image');
        }

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
