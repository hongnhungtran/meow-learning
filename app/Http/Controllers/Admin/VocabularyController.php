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
use Config;

class VocabularyController extends Controller
{
    public function __construct()
    {
        $this->topic = new Topic;
        $this->lesson = new Lesson;
        $this->vocabulary = new Vocabulary;
    }
    public function lessonList()
    {
        $levels = Level::all();
        $topics = $this->topic->getVocabularyTopic();
        $vocabulary_lessons = $this->lesson->getVocabularyLesson()->paginate(10);
            return view('admin.vocabulary.lessonList', compact('vocabulary_lessons', 'levels', 'topics'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function createLesson()
    {
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
/*        return $files->mapWithKeys(function($file) {
            $filename = $file['filename'].'.'.$file['extension'];
            $path = $file['path'];
            // Use the path to download each file via a generated link..
            // Storage::cloud()->get($file['path']);
            return [$filename => $path];
        });*/
        //$image_link = "https://drive.google.com/uc?export=view&id=".$file['basename'];
    
        return view('admin.vocabulary.lessonAdd', compact('levels', 'topics', 'files'));
    }

    public function storeLesson(Request $request)
    {
        request()->validate([
            'topic' => 'required',
            'level' => 'required',
            'lesson_title' => 'required|unique:lesson',
            'lesson_content' => 'required',
            'lesson_image_link' => 'required',
            'lesson_flag' => 'required',
        ]);
        $vocabulary_lesson = new Lesson([
            'course_id' => Config::get('constants.course.vocabulary'),
            'topic_id' => $request->get('topic'),
            'level_id' => $request->get('level'),
            'lesson_title' => $request->get('lesson_title'),
            'lesson_content' => $request->get('lesson_content'),
            'lesson_image_link' => $request->get('lesson_image_link'),
            'lesson_flag' => $request->get('lesson_flag'),
        ]);
        $vocabulary_lesson->save();
        return redirect()->route('vocabularyLessonList')
            ->with('status', 'Vocabulary lesson created successfully');
    }

    public function editLesson($id)
    {
        $levels = Level::all();
        $topics = Topic::all();
        $lesson = $this->lesson->findVocabularyLesson($id)->get();
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
        return view('admin.vocabulary.lessonEdit', compact('levels', 'topics', 'files', 'lesson'));
    }

    public function updateLesson(Request $request, $id)
    {
        request()->validate([
            'topic' => 'required',
            'level' => 'required',
            'lesson_title' => 'required',
            'lesson_content' => 'required',
            'lesson_image_link' => 'required',
            'lesson_flag' => 'required',
        ]);

        Lesson::find($id)->update([
            'course_id' => Config::get('constants.course.vocabulary'),
            'topic_id' => $request->get('topic'),
            'level_id' => $request->get('level'),
            'lesson_title' => $request->get('lesson_title'),
            'lesson_content' => $request->get('lesson_content'),
            'lesson_image_link' => $request->get('lesson_image_link'),
            'lesson_flag' => $request->get('lesson_flag'),
        ]);

        return redirect()->route('vocabularyShowLesson', $id)
            ->with('status', 'Vocabulary lesson updated successfully');
    }

    public function showLesson($id)
    {
        $lesson = $this->lesson->findVocabularyLesson($id)->get();
        $levels = Level::all();
        $vocabulary = $this->vocabulary->getVocabulary($id)->get();
        $count = $vocabulary->count();
        return view('admin.vocabulary.exerciseShow', compact('lesson', 'levels', 'vocabulary', 'count'));
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

    public function createExercise($id)
    {
        $levels = Level::all();
        $topics = Topic::all();
        $lesson = $this->lesson->findVocabularyLesson($id)->get();
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

        $audioFolder = 'audio';
        $audioContent = collect(Storage::cloud()->listContents('/', false));
        $directory = $audioContent->where('type', '=', 'dir')
            ->where('filename', '=', $audioFolder)
            ->first();
        if ( ! $directory) {
            return 'No such folder!';
        }
        $audioFiles = collect(Storage::cloud()->listContents($directory['path'], false))
            ->where('type', '=', 'file');
        return view('admin.vocabulary.wordAdd', compact('levels', 'topics', 'files', 'lesson', 'audioFiles'));
    }

    public function storeExercise(Request $request, $id)
    {
        request()->validate([
            'topic' => 'required',
            'level' => 'required',
            'lesson_title' => 'required|unique:lesson',
            'lesson_content' => 'required',
            'lesson_image_link' => 'required',
            'lesson_flag' => 'required',
        ]);
        $vocabulary_lesson = new Lesson([
            'course_id' => Config::get('constants.course.vocabulary'),
            'topic_id' => $request->get('topic'),
            'level_id' => $request->get('level'),
            'lesson_title' => $request->get('lesson_title'),
            'lesson_content' => $request->get('lesson_content'),
            'lesson_image_link' => $request->get('lesson_image_link'),
            'lesson_flag' => $request->get('lesson_flag'),
        ]);
        $vocabulary_lesson->save();
        return redirect()->route('vocabularyLessonList')
            ->with('status', 'Vocabulary lesson created successfully');
    }
}
