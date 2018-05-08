<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DocumentCategory;
use App\Document;
use App\DocumentImage;

class DocumentController extends Controller
{
    public function get_all_list()
    {
        $categories = DocumentCategory::all();
        $documents = Document::join('document_category','document_category.document_category_id', '=', 'document.document_category_id')
            ->paginate(18);

        return view('user.document.list', compact('categories', 'documents'))
            ->with('i', (request()->input('page', 1) - 1) * 18);
    }

    public function search_document(Request $request)
    {
        $keyword = $request->keyword;
        $categories = DocumentCategory::all();
        $documents = Document::join('document_category','document_category.document_category_id', '=', 'document.document_category_id')
            ->where('document.document_title', 'LIKE', '%' . $keyword . '%')
            ->orWhere('document.document_content', 'LIKE', '%' . $keyword . '%')
            ->orWhere('document.document_description', 'LIKE', '%' . $keyword . '%')
            ->paginate(18);

        return view('user.document.list', compact('category', 'documents', 'categories'))
            ->with('i', (request()->input('page', 1) - 1) * 18);
    }

    public function get_document_category($id)
    {
        $category = DocumentCategory::find($id)->get();
        $categories = DocumentCategory::all();
        $documents = Document::join('document_category','document_category.document_category_id', '=', 'document.document_category_id')
            ->where('document_category.document_category_id', $id)
            ->paginate(18);

        return view('user.document.list', compact('category', 'documents', 'categories'))
            ->with('i', (request()->input('page', 1) - 1) * 18);
    }

    public function get_document_content($id)
    {
        $document = Document::find($id);
        $images = DocumentImage::join('document','document_image.document_id', '=', 'document.document_id')
            ->where('document.document_id', $id)
            ->get();
        return view('user.document.detail', compact('document', 'images'));
    }

}
