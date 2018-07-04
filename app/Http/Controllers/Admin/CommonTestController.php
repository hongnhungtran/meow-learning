<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Lesson;
use App\Level;
use App\Topic;
use App\CommonTestQuestion;
use App\CommonTestAnswer;
use Storage;
use File;
use Session;
use Config;

class CommonTestController extends Controller
{
    public function __construct()
    {
        $this->topic = new Topic;
        $this->lesson = new Lesson;
    }

    public function lessonList()
    {
        // $levels = Level::all();
        // $topics = $this->topic->getCommonTestTopic();
        // $lessons = $this->lesson->getCommonTestLesson()->paginate(10);
        // return view('admin.common-test.lessonList', compact('lessons', 'levels', 'topics'))
        //     ->with('i', (request()->input('page', 1) - 1) * 10);
        $topic = new Topic;
        $topics = $topic->getCommonTestTopic();
        $levels = Level::all();
        $common_tests = Lesson::where('course_id', '=', 10)->paginate(10);
        

        return view('admin.common-test.lessonList', compact('common_tests', 'topics', 'levels'))
            ->with('i', (request()->input('page', 1) - 1) * 10);

    }

    public function createLesson()
    {
        $levels = Level::all();
        $levels = Level::all();
        $topics = Topic::all();
        $folder = 'vocabulary';
        // Get root directory contents...
        $contents = collect(Storage::cloud()->listContents('/', false));
        // Find the folder you are looking for...
        $dir = $contents->where('type', '=', 'dir')
            ->where('filename', '=', $folder)
            ->first(); // There could be duplicate directory names!
        if ( ! $dir) {
            return 'No such folder!';
        }
        // Get the files inside the folder...
        $files = collect(Storage::cloud()->listContents($dir['path'], false))
            ->where('type', '=', 'file');
        
        return view('admin.common-test.lessonAdd', compact('levels', 'files'));
    }

    public function storeLesson(Request $request)
    {
        request()->validate([
            'lesson_title' => 'required',
            'level' => 'required',
            'lesson_content' => 'required',
            'lesson_image_link' => 'required',
            'lesson_flag' => 'required',
        ]);
        $lesson = new Lesson([
            'course_id' => Config::get('constants.course.ommon-test'),
            'level_id' => $request->get('level'),
            'lesson_title' => $request->get('lesson_title'),
            'lesson_content' => $request->get('lesson_content'),
            'lesson_image_link' => $request->get('lesson_image_link'),
            'lesson_flag' => $request->get('lesson_flag'),
        ]);
        $lesson->save();
        return redirect()->route('commonTestLessonList')
            ->with('status', 'Test lesson created successfully');
        // //If has image file -> validate
        // if($request->upload_image != "") {
        //     request()->validate([
        //         'lesson_title' => 'required|unique:lesson',
        //         'lesson_content' => 'required|unique:lesson'
        //     ]);
        // } else {
        //     request()->validate([
        //         'lesson_title' => 'required|unique:lesson',
        //         'lesson_content' => 'required|unique:lesson',
        //         'lesson_image_link' => 'required|unique:lesson'
        //     ]);
        // }

        //get file information
//         $file = $request->file('upload_image');

//         if($request->hasFile('upload_image') && empty($request->get('lesson_image_link'))){
//             //Upload image file
//             //foreach ($files as $file) {
//             $filename = $file->getClientOriginalName();
//             $disk = Storage::disk('google'); 
//             $result = $disk->put($filename, File::get($file));

//             $dir = '/';
//             $recursive = false; // Get subdirectories also?
//             $contents = collect(Storage::cloud()->listContents($dir, $recursive));

//             $image = $contents
//                 ->where('type', '=', 'file')
//                 ->where('filename', '=', pathinfo($filename, PATHINFO_FILENAME))
//                 ->where('extension', '=', pathinfo($filename, PATHINFO_EXTENSION))
//                 ->first(); // there can be duplicate file names!

//             //Create image link
//             $lesson_image_link = "https://drive.google.com/uc?export=view&id=".$image['path'];
            
//             //Insert to DB
//             $common_test = new Lesson([
//                 'course_id' => $this->common_test_course_id,
//                 'level_id' => (int)$request->get('level'),
//                 'lesson_title' => $request->get('lesson_title'),
//                 'lesson_content' => $request->get('lesson_content'),
//                 'lesson_image_link' => $lesson_image_link ,
//                 'lesson_flag' => 1
//             ]);
//             var_dump($common_test) ;
// exit;
//             $common_test->save();
//             //}
//         } elseif ($request->hasFile('upload_image') === false && !empty($request->get('lesson_image_link'))) {
//             $common_test = new Lesson([
//                 'course_id' => $this->common_test_course_id,
//                 'level_id' => (int)$request->get('level'),
//                 'lesson_title' => $request->get('lesson_title'),
//                 'lesson_content' => $request->get('lesson_content'),
//                 'lesson_image_link' => $request->get('lesson_image_link'),
//                 'lesson_flag' => 1
//             ]);
//             $common_test->save();
//         } elseif($request->hasFile('upload_image') && !empty($request->get('lesson_image_link'))){
//             Session::flash('status', 'Only upload by input link or select image');
//         }

        
    }

    public function showLesson($id)
    {
        //question content
        $questions = CommonTestQuestion::where('lesson_id', $id)
            ->get();
        //lesson
        $lesson = Lesson::where('lesson_id', $id)->get();

        //question number
        $num = 1;

        return view('admin.common-test.testShow', compact('num', 'questions', 'lesson'));
    }

    public function editLesson($id)
    {
        $levels = Level::all();
        $topics = Topic::all();
        $lesson = Lesson::where('lesson_id', $id)->get();
        $folder = 'vocabulary';
        $contents = collect(Storage::cloud()->listContents('/', false));
        $dir = $contents->where('type', '=', 'dir')
            ->where('filename', '=', $folder)
            ->first(); 
        if ( ! $dir) {
            return 'No such folder!';
        }
        $files = collect(Storage::cloud()->listContents($dir['path'], false))
            ->where('type', '=', 'file');
        return view('admin.common-test.lessonEdit', compact('levels', 'topics', 'files', 'lesson'));
    }


    public function updateLesson(Request $request, $id)
    {
        request()->validate([
            'level' => 'required',
            'lesson_title' => 'required',
            'lesson_content' => 'required',
            'lesson_image_link' => 'required',
            'lesson_flag' => 'required',
        ]);

        Lesson::find($id)->update([
            'course_id' => Config::get('constants.course.common-test'),
            'level_id' => $request->get('level'),
            'lesson_title' => $request->get('lesson_title'),
            'lesson_content' => $request->get('lesson_content'),
            'lesson_image_link' => $request->get('lesson_image_link'),
            'lesson_flag' => $request->get('lesson_flag'),
        ]);

        return redirect()->route('commonTestShowLesson', $id)
            ->with('status', 'Test updated successfully');
    }

    public function destroy($id)
    {
        //
    }

    public function searchLesson (Request $request)
    {
        $searchTerm = [
            'topic_id' => $request->topic_id,
            'level_id' => $request->level_id,
            'lesson_id' => $request->lesson_id,
            'lesson_title' => $request->lesson_title,
            'lesson_flag' => $request->lesson_flag,
        ];
        $levels = Level::all();
        $topic = new Topic;
        $topics = $topic->getCommonTestTopic();
        $lesson = new Lesson;
        $common_tests = $lesson->search($searchTerm)->paginate(10);
            return view('admin.common-test.lessonList', compact('common_tests', 'levels', 'topics'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function questionEdit($lesson_id, $question_id)
    {
        $question = CommonTestQuestion::where('common_test_question_id', $question_id)->get();


        return view('admin.common-test.questionEdit', compact('question_id', 'lesson_id', 'question'));
    }


    public function questionCreate($lesson_id)
    {
        return view('admin.common-test.questionAdd', compact('lesson_id'));
    }


    public function questionList($lesson_id)
    {
        $questions = CommonTestQuestion::where('lesson_id', $lesson_id)
            ->get();

        $lesson = Lesson::find($lesson_id);
        $lesson_title = $lesson->lesson_title;
        $lesson_id = $lesson->lesson_id;

        $num = 1;
        return view('admin.common-test.questionList', compact('questions', 'lesson_title', 'lesson_id', 'num'));
    }

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


    public function questionUpdate($lesson_id, $question_id, Request $request)
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

        return redirect()->route('commonTestQuestionList', compact('lesson_id'))
            ->with('status', 'Lesson updated successfully');
    }
}
