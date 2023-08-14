<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index()
    {
        $books = Books::all();
        return view('books.index', compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($book)
    {
        return view('books.show', compact('book'));
    }

    public function update(Request $request, $book)
    {
        //
    }

    public function edit($book)
    {
        return view('books.edit', compact('book'));
    }

    public function destroy($book)
    {
        //
    }
}
