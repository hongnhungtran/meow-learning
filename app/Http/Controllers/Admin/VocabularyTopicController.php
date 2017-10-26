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

class VocabularyTopicController extends Controller
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
    public function index(Request $request)
    {
        /*$vocabulary_topics = Topic::join('level', 'topic.level_id', '=', 'level.level_id')
            ->where('course_id', $this->vocabulary_course_id)
            ->paginate(10);
*/
        if($request->has('topic_title')) {
            $vocabulary_topics = Topic::join('level', 'topic.level_id', '=', 'level.level_id')
            ->where('course_id', $this->vocabulary_course_id)
            ->where('topic_title', 'LIKE', "%$request->topic_title%")
            ->orwhere('topic_title', 'LIKE', "%$request->topic_title%")
            ->paginate(10);
        } else {
            $vocabulary_topics = Topic::join('level', 'topic.level_id', '=', 'level.level_id')
            ->where('course_id', $this->vocabulary_course_id)
            ->paginate(10);
        }

        return view('admin.vocabulary.topicList', compact('vocabulary_topics'))
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
        
        return view('admin.vocabulary.topicAdd', compact('levels'));
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
                'topic_title' => 'required|unique:topic',
                'topic_content' => 'required|unique:topic'
            ]);
        } else {
            request()->validate([
                'topic_title' => 'required|unique:topic',
                'topic_content' => 'required|unique:topic',
                'topic_image_link' => 'required|unique:topic'
            ]);
        }

        //get file information
        $file = $request->file('upload_image');

        if($request->hasFile('upload_image')){
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
            $topic_image_link = "https://drive.google.com/uc?export=view&id=".$image['path'];
            
            //Insert to DB
            $vocabulary_topic = new Topic([
                'course_id' => $this->vocabulary_course_id,
                'level_id' => (int)$request->get('level'),
                'topic_title' => $request->get('topic_title'),
                'topic_content' => $request->get('topic_content'),
                'topic_image_link' => $topic_image_link 
            ]);
            $vocabulary_topic->save();
            //}
        } else {
            $vocabulary_topic = new Topic([
                'course_id' => $this->vocabulary_course_id,
                'level_id' => (int)$request->get('level'),
                'topic_title' => $request->get('topic_title'),
                'topic_content' => $request->get('topic_content'),
                'topic_image_link' => $request->get('topic_image_link')
            ]);
            $vocabulary_topic->save();
        }

        return redirect()->route('vocabulary.topic.index')
            ->with('status', 'Vocabulary topic created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vocabulary_lessons = Lesson::join('level', 'lesson.level_id', '=', 'level.level_id')
            ->where('topic_id', $id)
            ->paginate(10);    

        return view('admin.vocabulary.lessonList', compact('vocabulary_lessons'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
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

        $vocabulary_topic = Topic::find($id);

        return view('admin.vocabulary.topicEdit', compact('vocabulary_topic', 'levels', 'id'));
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
            'topic_title' => 'required',
            'topic_content' => 'required',
            'topic_image_link' => 'required'
        ]);

        Topic::find($id)->update([
            'level_id' => (int)$request->get('level'),
            'topic_title' => $request->get('topic_title'),
            'topic_content' => $request->get('topic_content'),
            'topic_image_link' => $request->get('topic_image_link')
        ]);

        return redirect()->route('vocabulary.topic.index')
            ->with('status', 'Vocabulary topic updated successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $topic = Topic::find($id);

        if($topic->topic_flag = 1) {
            $topic->topic_flag = 0;
            $topic->save();
        }

        return redirect()->route('vocabulary.topic.index')
            ->with('success', 'Topic deleted successfully');
    }
}
