<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Topic;
use App\Lesson;
use App\Level;
use App\Vocabulary;
use Session;

class VocabularyLessonController extends Controller
{
    public function __construct()
    {
        $this->vocabulary_course_id = 1;

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $lesson = new Lesson;
        
        $vocabulary_lessons = $lesson->get_vocabulary_lesson()->paginate(10);

            return view('admin.vocabulary.lessonList', compact('vocabulary_lessons'))
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
        $topics = Topic::where('course_id', $this->vocabulary_course_id)
            ->get();

        return view('admin.vocabulary.lessonAdd', compact('levels', 'topics'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //If has image file -> validate
        if($request->hasFile('upload_image')) {
            request()->validate([
            'lesson_title' => 'required|unique:lesson',
            'lesson_content' => 'required|unique:lesson',
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
            $vocabulary_lesson = new Lesson([
                'course_id' => $this->vocabulary_course_id,
                'level_id' => (int)$request->get('level'),
                'lesson_title' => $request->get('lesson_title'),
                'lesson_content' => $request->get('lesson_content'),
                'lesson_image_link' => $lesson_image_link ,
                'lesson_flag' => 1
            ]);

            $vocabulary_lesson->save();
            //}
        } elseif ($request->hasFile('upload_image') === false && !empty($request->get('lesson_image_link'))) {
            $vocabulary_lesson = new Lesson([
                'course_id' => $this->vocabulary_course_id,
                'level_id' => (int)$request->get('level'),
                'lesson_title' => $request->get('lesson_title'),
                'lesson_content' => $request->get('lesson_content'),
                'lesson_image_link' => $request->get('lesson_image_link'),
                'lesson_flag' => 1
            ]);
            
            $vocabulary_lesson->save();
        } elseif($request->hasFile('upload_image') && !empty($request->get('lesson_image_link'))){
            Session::flash('status', 'Only upload by input link or select image');
        }

        return redirect()->route('vocabulary.lesson.index')
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
        return view('admin.vocabulary.exercise');
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

        $topics = Topic::where('course_id', $this->vocabulary_course_id)
        ->get();

        $vocabulary_lesson = Lesson::find($id);

        return view('admin.vocabulary.lessonEdit', compact('vocabulary_lesson', 'levels', 'id', 'topics'));
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
            'topic_id' => (int)$request->get('topic'),
            'lesson_title' => $request->get('lesson_title'),
            'lesson_content' => $request->get('lesson_content'),
            'lesson_image_link' => $request->get('lesson_image_link')
        ]);

        return redirect()->route('vocabulary.lesson.index')
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
        
    }

    public function hide($id)
    {
        $lesson = Lesson::find($id);

        if($lesson->lesson_flag = 1) {
            $lesson->lesson_flag = 0;
            $lesson->save();
        }

        return redirect()->route('lesson.index')
            ->with('success', 'Lesson hide successfully');
    }
}
