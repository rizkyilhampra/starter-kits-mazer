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
        $this->validate($request, [
            'name' => 'required|unique:books',
            'author' => 'required',
        ]);

        $data = $request->all();

        $data['image'] = Books::DEFAULT_IMAGE;

        try {
            Books::create($data);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
        }
        return redirect()->route('books.index')->with('success', 'Book created successfully.');
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
        $book = Books::findOrFail($book);

        return view('books.edit', compact('book'));
    }

    public function destroy($book)
    {
        //
    }
}
