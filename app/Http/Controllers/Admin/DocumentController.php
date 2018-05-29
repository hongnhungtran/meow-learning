<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Document;
use App\DocumentImage;
use App\DocumentCategory;

class DocumentController extends Controller
{
	public function documentList()
	{
		$documents = Document::join('document_category', 'document.document_category_id', '=', 'document_category.document_category_id')
			->paginate(10);
		$categories = DocumentCategory::all();
		
		return view('admin.document.list', compact('documents', 'categories'))
			->with('i', (request()->input('page', 1) - 1) * 10);
	}

	public function create()
	{
		$categories = DocumentCategory::all();
		return view('admin.document.add', compact('categories'));
	}

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
		return redirect()->route('documentList')
			->with('status', 'Document created successfully');
	}

	public function getDetail($id)
	{
		$document = Document::join('document_category', 'document_category.document_category_id', 'document.document_category_id')
			->where('document.document_id', $id)
			->get();
		$images = Document::join('document_image', 'document_image.document_id', 'document.document_id')
			->where('document.document_id', $id)
			->get();
		return view('admin.document.detail', compact('document', 'images'));
	}

	public function editForm($id)
	{
		$document = Document::join('document_category', 'document_category.document_category_id', 'document.document_category_id')
			->where('document.document_id', $id)
			->get();
		$images = Document::join('document_image', 'document_image.document_id', 'document.document_id')
			->where('document.document_id', $id)
			->get();
		$categories = DocumentCategory::all();
		return view('admin.document.update', compact('document', 'images', 'categories'));
	}

	public function documentUpdate(Request $request, $id)
	{
		$document = Document::find($id);

		request()->validate([
			'document_category_id' => 'required',
			'document_title' => 'required',
			'document_content' => 'required',
			'document_description' => 'required',
			'document_download_link' => 'required'
		]);

    Document::where('document_id', $id)->update([
    	'document_category_id' => (int)$request['document_category_id'],
			'document_title' => $request['document_title'],
			'document_content' => $request['document_content'],
			'document_description' => $request['document_description'],
			'document_download_link' => $request['document_download_link'],
    ]);

		return view('admin.document.list')->with('status', 'Document update successfully');
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

	public function searchDocument (Request $request)
	{
		$searchTerm = [
			'document_category' => $request->document_category,
			'document_content' => $request->document_content,
			'document_title' => $request->document_title,
			'document_flag' => $request->document_flag,
		];
		$categories = DocumentCategory::all();
		$document = new Document();
		$documents = $document->search($searchTerm)->paginate(10);
		return view('admin.document.list', compact('documents', 'categories'))
			->with('i', (request()->input('page', 1) - 1) * 10);
	}
}
