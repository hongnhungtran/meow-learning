<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Topic;
use App\Lesson;
use App\Level;
use App\Vocabulary;
use Storage;
use File;
use Session;

class WritingController extends Controller
{
    public function __construct()
    {
        $this->topic = new Topic;
        $this->lesson = new Lesson;
    }
    public function lessonList()
    {
        $levels = Level::all();
        $topics = $this->topic->getWritingTopic();
        $writing_lessons = $this->lesson->getWritingLesson()->paginate(10);
            return view('admin.writing.lessonList', compact('writing_lessons', 'levels', 'topics'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function createLesson()
    {
        $levels = Level::all();
        $topics = $this->topic->getVocabularyTopic();
        return view('admin.vocabulary.lessonAdd', compact('levels', 'topics'));
    }

    public function storeLesson(Request $request)
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

    public function editLesson($id)
    {
        $levels = Level::all();
        $topics = $this->topic->getVocabularyTopic();
        return view('admin.vocabulary.lessonEdit', compact('levels', 'topics'));
    }

    public function updateLesson(Request $request, $id)
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

    public function showLesson($id)
    {
        return view('admin.vocabulary.exercise');
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
        $topics = $topic->getVocabularyTopic();
        $lesson = new Lesson;
        $vocabulary_lessons = $lesson->search($searchTerm)->paginate(10);
            return view('admin.vocabulary.lessonList', compact('vocabulary_lessons', 'levels', 'topics'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }
}
