<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\VocabularyTopic;
use App\Http\Requests\VocabularyTopicFormRequest;

class VocabularyTopicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vocabulary_topic = VocabularyTopic::paginate(10);
        $vocabulary_topic->withPath('url');
        
        return view('admin.vocabulary.topicList', compact('vocabulary_topic'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('admin.vocabulary.topicAdd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VocabularyTopicFormRequest $request)
    {
        $vocabulary_topic = new Ticket(array(
        'vocabulary_topic_title' => $request->get('vocabulary_topic_title'),
        'vocabulary_topic_content' => $request->get('vocabulary_topic_content'),
    ));

    $vocabulary_topic->save();

    return redirect('/topicList')->with('status', 'Your vocabulary topic has been created!');
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

    public function vocabulary_topic_api() {
         $vocabulary_topic = VocabularyTopic::paginate(10);

        if (!$vocabulary_topic) {
            throw new HttpException(400, "Invalid data");
        }

        return response()->json(
            $vocabulary_topic,
            200
        );
    }
}
