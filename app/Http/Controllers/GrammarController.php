<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grammar;

class GrammarController extends Controller
{
    public function index()
    {
        $grammar = Grammar::paginate(10);

        if (!$grammar) {
            throw new HttpException(400, "Invalid data");
        }

        return response()->json(
            $grammar,
            200
        );
    }

    public function show($id)
    {
        if (!$id) {
           throw new HttpException(400, "Invalid id");
        }

        $grammar = Grammar::find($id);

        return response()->json([
            $grammar,
        ], 200);

    }

    public function store(Request $request)
    {
        $book = new Book;
        $book->title = $request->input('title');
        $book->price = $request->input('price');
        $book->author = $request->input('author');
        $book->editor = $request->input('editor');

        if ($book->save()) {
            return $book;
        }

        throw new HttpException(400, "Invalid data");
    }

    public function update(Request $request, $id)
    {
        if (!$id) {
            throw new HttpException(400, "Invalid id");
        }

        $book = Book::find($id);
        $book->title = $request->input('title');
        $book->price = $request->input('price');
        $book->author = $request->input('author');
        $book->editor = $request->input('editor');

        if ($book->save()) {
            return $book;
        }

        throw new HttpException(400, "Invalid data");
    }

    public function destroy($id)
    {
        if (!$id) {
            throw new HttpException(400, "Invalid id");
        }

        $book = Book::find($id);
        $book->delete();

        return response()->json([
            'message' => 'book deleted',
        ], 200);
    }
}
