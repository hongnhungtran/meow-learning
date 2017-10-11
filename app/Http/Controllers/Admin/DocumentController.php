<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Document;
use App\DocumentImage;
use App\DocumentCategory;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documents = Document::join('document_category', 'document.document_category_id', '=', 'document_category.document_category_id')
            ->paginate(10);
        
        return view('admin.document.list', compact('documents'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = DocumentCategory::all();
        
        return view('admin.document.add', compact('categories'));
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
            'document_category_id' => 'required',
            'document_title' => 'required|unique:topic',
            'document_content' => 'required|unique:topic',
            'document_download_link' => 'required|unique:topic'
        ]);

        $document = new Document([
            'document_category_id' => (int)$request->get('document_category_id'),
            'document_title' => $request->get('document_title'),
            'document_content' => $request->get('document_content'),
            'document_download_link' => $request->get('document_download_link'),
          
        ]);

        $document->save();

        return redirect()->route('document.index')
            ->with('status', 'Document created successfully');
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
}
