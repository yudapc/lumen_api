<?php

namespace App\Http\Controllers;

use App\Models\Book;

class BooksController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return response()->json($books);
    }

    public function show($id)
    {
        $book  = Book::find($id);
        return response()->json($book);
    }

    public function create(Request $request)
    {
        $book = Book::create($request->all());
        return response()->json($book);
    }

    public function update(Request $request, $id)
    {
        $book  = Book::find($id);
        $book->title = $request->input('title');
        $book->author = $request->input('author');
        $book->isbn = $request->input('isbn');
        $book->save();
        return response()->json($book);
    }

    public function destroy($id)
    {
        $book  = Book::find($id);
        $book->delete();
        return response()->json('deleted');
    }
}
